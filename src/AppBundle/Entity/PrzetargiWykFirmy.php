<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PrzetargiWykFirmy
 *
 * @ORM\Table(name="przetargi_wyk_firmy", indexes={@ORM\Index(name="przetargi_wyk_firmy_idx2", columns={"krs"}), @ORM\Index(name="przetargi_wyk_firmy_idx3", columns={"regon"}), @ORM\Index(name="przetargi_wyk_firmy_idx4", columns={"nip"}), @ORM\Index(name="przetargi_wyk_firmy_idx1", columns={"wyk_id"})})
 * @ORM\Entity
 */
class PrzetargiWykFirmy
{
    /**
     * @var string
     *
     * @ORM\Column(name="wyk_id", type="string", length=32, nullable=false)
     */
    private $wykId = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="krs", type="bigint", nullable=true)
     */
    private $krs;

    /**
     * @var integer
     *
     * @ORM\Column(name="regon", type="bigint", nullable=true)
     */
    private $regon;

    /**
     * @var integer
     *
     * @ORM\Column(name="nip", type="bigint", nullable=true)
     */
    private $nip;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_wprow", type="datetime", nullable=true)
     */
    private $dataWprow;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_human", type="boolean", nullable=false)
     */
    private $isHuman = '0';



    /**
     * Set wykId
     *
     * @param string $wykId
     *
     * @return PrzetargiWykFirmy
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
     * Set krs
     *
     * @param integer $krs
     *
     * @return PrzetargiWykFirmy
     */
    public function setKrs($krs)
    {
        $this->krs = $krs;

        return $this;
    }

    /**
     * Get krs
     *
     * @return integer
     */
    public function getKrs()
    {
        return $this->krs;
    }

    /**
     * Set regon
     *
     * @param integer $regon
     *
     * @return PrzetargiWykFirmy
     */
    public function setRegon($regon)
    {
        $this->regon = $regon;

        return $this;
    }

    /**
     * Get regon
     *
     * @return integer
     */
    public function getRegon()
    {
        return $this->regon;
    }

    /**
     * Set nip
     *
     * @param integer $nip
     *
     * @return PrzetargiWykFirmy
     */
    public function setNip($nip)
    {
        $this->nip = $nip;

        return $this;
    }

    /**
     * Get nip
     *
     * @return integer
     */
    public function getNip()
    {
        return $this->nip;
    }

    /**
     * Set dataWprow
     *
     * @param \DateTime $dataWprow
     *
     * @return PrzetargiWykFirmy
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

    /**
     * Set isHuman
     *
     * @param boolean $isHuman
     *
     * @return PrzetargiWykFirmy
     */
    public function setIsHuman($isHuman)
    {
        $this->isHuman = $isHuman;

        return $this;
    }

    /**
     * Get isHuman
     *
     * @return boolean
     */
    public function getIsHuman()
    {
        return $this->isHuman;
    }

}
