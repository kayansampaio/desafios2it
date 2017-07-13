<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="persons")
 */
class Person
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     */
    private $personid;

    /**
     * @ORM\Column(type="text", length=50)
     */
    private $personname;

    /**
     * @ORM\Column(type="integer")
     */
    private $phone1;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $phone2;

    public function setPersonid($value)
    {
        $this->personid = $value;
    }

    public function setPersonname($value)
    {
        $this->personname = $value;
    }

    public function setPhone1($value)
    {
        $this->phone1 = $value;
    }

    public function setPhone2($value)
    {
        $this->phone2 = $value;
    }

    /**
     * @return mixed
     */
    public function getPersonid()
    {
        return $this->personid;
    }

    /**
     * @return mixed
     */
    public function getPersonname()
    {
        return $this->personname;
    }

    /**
     * @return mixed
     */
    public function getPhone1()
    {
        return $this->phone1;
    }

    /**
     * @return mixed
     */
    public function getPhone2()
    {
        return $this->phone2;
    }


}
