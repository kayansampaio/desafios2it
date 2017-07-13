<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use AppBundle\Entity\Person;
use AppBundle\Entity\Shiporder;
use AppBundle\Entity\Item;

class XmlController extends Controller
{
    private $em;
    /**
     * @Route("/", name="index")
     */
    public function indexAction()
    {
        return $this->render('xml/index.html.twig');
    }

    /**
     * @Route("/upload")
     */
    public function uploadAction(Request $request)
    {
        //define directory to move and read files.
        $dir = $this->get('kernel')->getRootDir() . '/../web/upload';

        //get all file from form
        $files = $request->files->all();


        foreach ($files['files'] as $value) {
            if(!is_null($value)){
                //Move file to Folder keeping original name
                $value->move($dir, $value->getClientOriginalName());
            }
        }

        $this->em = $this->getDoctrine()->getManager();

        try{

            foreach ($files['files'] as $value) {
                if(!is_null($value)){
                    $xml = simplexml_load_file($dir . '/' . $value->getClientOriginalName());
                    $json = json_encode($xml);
                    $array = json_decode($json, true);

                    if ($xml->getName() == 'people') {
                        $this->loadPeople($array['person']);
                    } else {
                        $this->loadShiporders($array['shiporder']);
                    }
                }
            }
            $this->em->flush();

            $response = new Response();
            $response->setContent(json_encode(['message' => 'All Persons and Shiporders were successfully saved!']));
            $response->headers->set('Content-Type', 'application/json');
            return $response;

        }catch (\Exception $e){
            return new Response(
                $e->getMessage(),
                Response::HTTP_INTERNAL_SERVER_ERROR,
                array('content-type' => 'application/json')
            );
        }


    }

    private function loadPeople($array)
    {

        foreach ($array as $person) {

            $p = new Person();
            $p->setPersonid($person['personid']);
            $p->setPersonname($person['personname']);

            if (sizeof($person['phones']['phone']) == 2) {
                $p->setPhone1($person['phones']['phone'][0]);
                $p->setPhone2($person['phones']['phone'][1]);
            } else {
                $p->setPhone1($person['phones']['phone']);
            }

            $this->em->persist($p);

        }
    }

    private function loadShiporders($array)
    {
        foreach ($array as $shiporder) {
            $s = new Shiporder();
            $s->setOrderid($shiporder['orderid']);
            $s->setOrderperson($shiporder['orderperson']);
            $s->setName($shiporder['shipto']['name']);
            $s->setAddress($shiporder['shipto']['address']);
            $s->setCity($shiporder['shipto']['city']);
            $s->setCountry($shiporder['shipto']['country']);
            $this->em->persist($s);
            foreach ($shiporder['items'] as $item) {
                if (count($item, COUNT_RECURSIVE) != count($item)) {
                    foreach ($item as $item_loop) {
                        $this->insertItem($item_loop, $shiporder['orderid']);
                    }
                } else {
                    $this->insertItem($item, $shiporder['orderid']);
                }
            }
        }
    }

    private function insertItem(array $item, $shiporder)
    {
        $i = new Item();
        $i->setTitle($item['title']);
        $i->setNote($item['note']);
        $i->setQuantity($item['quantity']);
        $i->setPrice($item['price']);
        $i->setShiporder($shiporder);
        $this->em->persist($i);
    }

    /**
     * @Route("/submissions")
     */
    public function listSubmissions(){
        $persons = $this->getDoctrine()->getRepository(Person::class)->findAll();
        return $this->render('xml/submissions.html.twig', [
            'persons' => $persons
        ]);
    }

    /**
     * @Route("/shiporders/person/{person_id}")
     */
    public function listShiporders($person_id){

        $repository1 = $this->getDoctrine()
            ->getRepository(Shiporder::class);

        $query1 = $repository1->createQueryBuilder('s')
            ->where('s.orderperson = :person_id')
            ->setParameter('person_id', $person_id)
            ->getQuery();

        $shiporders = $query1->getResult();

        $repository2 = $this->getDoctrine()
            ->getRepository(Item::class);

        $query2 = $repository2->createQueryBuilder('i')
            ->where('i.shiporder = :shiporder_id')
            ->setParameter('shiporder_id', $shiporders[0]->getOrderid())
            ->getQuery();

        $items = $query2->getResult();

        return $this->render('xml/shiporders.html.twig', [
            'shiporders' => $shiporders[0],
            'items' => $items
        ]);

    }
}
