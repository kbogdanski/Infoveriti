<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PrzetargiWykExtras
 *
 * @ORM\Table(name="przetargi_wyk_extras", indexes={@ORM\Index(name="wyk_id", columns={"wyk_id"})})
 * @ORM\Entity
 */
class PrzetargiWykExtras
{
    /**
     * @var string
     *
     * @ORM\Column(name="wyk_id", type="string", length=32, nullable=false)
     */
    private $wykId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_ins", type="datetime", nullable=true)
     */
    private $dateIns;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_last", type="boolean", nullable=true)
     */
    private $isLast = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=64, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="text", length=16777215, nullable=true)
     */
    private $value;



    /**
     * Set wykId
     *
     * @param string $wykId
     *
     * @return PrzetargiWykExtras
     */
    public function setWykId($wykId)
    {
        $this->wykId = $wykId;

        return $this;
    }

    /**
     * Get wykId
     *
     * @return string
     */
    public function getWykId()
    {
        return $this->wykId;
    }

    /**
     * Set dateIns
     *
     * @param \DateTime $dateIns
     *
     * @return PrzetargiWykExtras
     */
    public function setDateIns($dateIns)
    {
        $this->dateIns = $dateIns;

        return $this;
    }

    /**
     * Get dateIns
     *
     * @return \DateTime
     */
    public function getDateIns()
    {
        return $this->dateIns;
    }

    /**
     * Set isLast
     *
     * @param boolean $isLast
     *
     * @return PrzetargiWykExtras
     */
    public function setIsLast($isLast)
    {
        $this->isLast = $isLast;

        return $this;
    }

    /**
     * Get isLast
     *
     * @return boolean
     */
    public function getIsLast()
    {
        return $this->isLast;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return PrzetargiWykExtras
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set value
     *
     * @param string $value
     *
     * @return PrzetargiWykExtras
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

}
