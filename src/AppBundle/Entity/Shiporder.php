<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="shiporders")
 */
class Shiporder
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     */
    private $orderid;

    /**
     * @ORM\Column(type="integer")
     */
    private $orderperson;

    /**
     * @ORM\Column(type="text", length=50)
     */
    private $name;

    /**
     * @ORM\Column(type="text", length=50)
     */
    private $address;

    /**
     * @ORM\Column(type="text", length=50)
     */
    private $city;

    /**
     * @ORM\Column(type="text", length=50)
     */
    private $country;

    /**
     * @param mixed $orderid
     */
    public function setOrderid($orderid)
    {
        $this->orderid = $orderid;
    }

    /**
     * @param mixed $orderperson
     */
    public function setOrderperson($orderperson)
    {
        $this->orderperson = $orderperson;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @param mixed $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return mixed
     */
    public function getOrderid()
    {
        return $this->orderid;
    }

    /**
     * @return mixed
     */
    public function getOrderperson()
    {
        return $this->orderperson;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }



}
