<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PrzetargiExtras
 *
 * @ORM\Table(name="przetargi_extras", indexes={@ORM\Index(name="przetargi_extras_idx1", columns={"przetarg_id"})})
 * @ORM\Entity
 */
class PrzetargiExtras
{
    /**
     * @var integer
     *
     * @ORM\Column(name="przetarg_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $przetargId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=64, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="text", length=16777215, nullable=true)
     */
    private $value;



    /**
     * Set value
     *
     * @param string $value
     *
     * @return PrzetargiExtras
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

    /**
     * Set przetargId
     *
     * @param integer $przetargId
     *
     * @return PrzetargiExtras
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
     * @return PrzetargiExtras
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
}
