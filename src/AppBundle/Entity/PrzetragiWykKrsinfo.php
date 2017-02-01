<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PrzetragiWykKrsinfo
 *
 * @ORM\Table(name="przetragi_wyk_krsinfo", indexes={@ORM\Index(name="wyk", columns={"wyk_id"}), @ORM\Index(name="krs", columns={"krs"})})
 * @ORM\Entity
 */
class PrzetragiWykKrsinfo
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
     * @var string
     *
     * @ORM\Column(name="nazwa_firmy", type="text", nullable=false)
     */
    private $nazwaFirmy;

    /**
     * @var string
     *
     * @ORM\Column(name="miasto", type="string", length=255, nullable=false)
     */
    private $miasto = '';

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="text", length=65535, nullable=true)
     */
    private $url;



    /**
     * Set wykId
     *
     * @param string $wykId
     *
     * @return PrzetragiWykKrsinfo
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
     * @return PrzetragiWykKrsinfo
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
     * Set nazwaFirmy
     *
     * @param string $nazwaFirmy
     *
     * @return PrzetragiWykKrsinfo
     */
    public function setNazwaFirmy($nazwaFirmy)
    {
        $this->nazwaFirmy = $nazwaFirmy;

        return $this;
    }

    /**
     * Get nazwaFirmy
     *
     * @return string
     */
    public function getNazwaFirmy()
    {
        return $this->nazwaFirmy;
    }

    /**
     * Set miasto
     *
     * @param string $miasto
     *
     * @return PrzetragiWykKrsinfo
     */
    public function setMiasto($miasto)
    {
        $this->miasto = $miasto;

        return $this;
    }

    /**
     * Get miasto
     *
     * @return string
     */
    public function getMiasto()
    {
        return $this->miasto;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return PrzetragiWykKrsinfo
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

}
