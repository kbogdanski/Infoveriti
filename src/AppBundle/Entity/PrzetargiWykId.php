<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PrzetargiWykId
 *
 * @ORM\Table(name="przetargi_wyk_id", indexes={@ORM\Index(name="przetargi_wyk_id_idx1", columns={"wyk_id"}), @ORM\Index(name="przetargi_wyk_id_idx2", columns={"przetarg_id"}), @ORM\Index(name="przetargi_wyk_id_idx3", columns={"part_id"})})
 * @ORM\Entity
 */
class PrzetargiWykId
{
    /**
     * @var string
     *
     * @ORM\Column(name="wyk_id", type="string", length=32, nullable=false)
     */
    private $wykId;

    /**
     * @var integer
     *
     * @ORM\Column(name="przetarg_id", type="bigint", nullable=false)
     */
    private $przetargId;

    /**
     * @var integer
     *
     * @ORM\Column(name="part_id", type="bigint", nullable=true)
     */
    private $partId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_wprow", type="datetime", nullable=true)
     */
    private $dataWprow;



    /**
     * Set wykId
     *
     * @param string $wykId
     *
     * @return PrzetargiWykId
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
     * Set przetargId
     *
     * @param integer $przetargId
     *
     * @return PrzetargiWykId
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
     * Set partId
     *
     * @param integer $partId
     *
     * @return PrzetargiWykId
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
     * Set dataWprow
     *
     * @param \DateTime $dataWprow
     *
     * @return PrzetargiWykId
     */
    public function setDataWprow($dataWprow)
    {
        $this->dataWprow = $dataWprow;

        return $this;
    }

    /**
     * Get dataWprow
     *
     * @return \DateTime
     */
    public function getDataWprow()
    {
        return $this->dataWprow;
    }

}
