<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PrzetargiCzZmiany
 *
 * @ORM\Table(name="przetargi_cz_zmiany", indexes={@ORM\Index(name="przetargi_cz_zmiany_idx1", columns={"przetarg_id"})})
 * @ORM\Entity
 */
class PrzetargiCzZmiany
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="przetarg_id", type="bigint", nullable=true)
     */
    private $przetargId;

    /**
     * @var string
     *
     * @ORM\Column(name="zp", type="string", length=10, nullable=true)
     */
    private $zp;

    /**
     * @var boolean
     *
     * @ORM\Column(name="czy_dodane", type="boolean", nullable=false)
     */
    private $czyDodane = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="nr", type="smallint", nullable=true)
     */
    private $nr;

    /**
     * @var string
     *
     * @ORM\Column(name="miejsce", type="string", length=1024, nullable=true)
     */
    private $miejsce;

    /**
     * @var string
     *
     * @ORM\Column(name="jest", type="string", length=1024, nullable=true)
     */
    private $jest;

    /**
     * @var string
     *
     * @ORM\Column(name="ma", type="string", length=1024, nullable=true)
     */
    private $ma;



    /**
     * Set przetargId
     *
     * @param integer $przetargId
     *
     * @return PrzetargiCzZmiany
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
     * Set zp
     *
     * @param string $zp
     *
     * @return PrzetargiCzZmiany
     */
    public function setZp($zp)
    {
        $this->zp = $zp;

        return $this;
    }

    /**
     * Get zp
     *
     * @return string
     */
    public function getZp()
    {
        return $this->zp;
    }

    /**
     * Set czyDodane
     *
     * @param boolean $czyDodane
     *
     * @return PrzetargiCzZmiany
     */
    public function setCzyDodane($czyDodane)
    {
        $this->czyDodane = $czyDodane;

        return $this;
    }

    /**
     * Get czyDodane
     *
     * @return boolean
     */
    public function getCzyDodane()
    {
        return $this->czyDodane;
    }

    /**
     * Set nr
     *
     * @param integer $nr
     *
     * @return PrzetargiCzZmiany
     */
    public function setNr($nr)
    {
        $this->nr = $nr;

        return $this;
    }

    /**
     * Get nr
     *
     * @return integer
     */
    public function getNr()
    {
        return $this->nr;
    }

    /**
     * Set miejsce
     *
     * @param string $miejsce
     *
     * @return PrzetargiCzZmiany
     */
    public function setMiejsce($miejsce)
    {
        $this->miejsce = $miejsce;

        return $this;
    }

    /**
     * Get miejsce
     *
     * @return string
     */
    public function getMiejsce()
    {
        return $this->miejsce;
    }

    /**
     * Set jest
     *
     * @param string $jest
     *
     * @return PrzetargiCzZmiany
     */
    public function setJest($jest)
    {
        $this->jest = $jest;

        return $this;
    }

    /**
     * Get jest
     *
     * @return string
     */
    public function getJest()
    {
        return $this->jest;
    }

    /**
     * Set ma
     *
     * @param string $ma
     *
     * @return PrzetargiCzZmiany
     */
    public function setMa($ma)
    {
        $this->ma = $ma;

        return $this;
    }

    /**
     * Get ma
     *
     * @return string
     */
    public function getMa()
    {
        return $this->ma;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
