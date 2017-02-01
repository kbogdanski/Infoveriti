<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PrzetargiCzExtras
 *
 * @ORM\Table(name="przetargi_cz_extras", indexes={@ORM\Index(name="part_id", columns={"part_id"}), @ORM\Index(name="przetarg_id", columns={"przetarg_id"})})
 * @ORM\Entity
 */
class PrzetargiCzExtras
{
    /**
     * @var integer
     *
     * @ORM\Column(name="part_id", type="bigint", nullable=false)
     */
    private $partId;

    /**
     * @var integer
     *
     * @ORM\Column(name="przetarg_id", type="bigint", nullable=false)
     */
    private $przetargId;

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
     * Set partId
     *
     * @param integer $partId
     *
     * @return PrzetargiCzExtras
     */
    public function setPartId($partId)
    {
        $this->partId = $partId;

        return $this;
    }

    /**
     * Get partId
     *
     * @return integer
     */
    public function getPartId()
    {
        return $this->partId;
    }

    /**
     * Set przetargId
     *
     * @param integer $przetargId
     *
     * @return PrzetargiCzExtras
     */
    public function setPrzetargId($przetargId)
    {
        $this->przetargId = $przetargId;

        return $this;
    }

    /**
     * Get przetargId
     *
     * @return integer
     */
    public function getPrzetargId()
    {
        return $this->przetargId;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return PrzetargiCzExtras
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
     * @return PrzetargiCzExtras
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
