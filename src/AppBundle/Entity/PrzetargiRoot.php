<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PrzetargiRoot
 *
 * @ORM\Table(name="przetargi_root", indexes={@ORM\Index(name="przetarg_id", columns={"przetarg_id"}), @ORM\Index(name="przetarg_root", columns={"przetarg_root"})})
 * @ORM\Entity
 */
class PrzetargiRoot
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
     * @var integer
     *
     * @ORM\Column(name="przetarg_root", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $przetargRoot;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_ins", type="datetime", nullable=true)
     */
    private $dateIns;



    /**
     * Set dateIns
     *
     * @param \DateTime $dateIns
     *
     * @return PrzetargiRoot
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
     * Set przetargId
     *
     * @param integer $przetargId
     *
     * @return PrzetargiRoot
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
     * Set przetargRoot
     *
     * @param integer $przetargRoot
     *
     * @return PrzetargiRoot
     */
    public function setPrzetargRoot($przetargRoot)
    {
        $this->przetargRoot = $przetargRoot;

        return $this;
    }

    /**
     * Get przetargRoot
     *
     * @return integer
     */
    public function getPrzetargRoot()
    {
        return $this->przetargRoot;
    }
}
