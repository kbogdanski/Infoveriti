<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PrzetargiCpv
 *
 * @ORM\Table(name="przetargi_cpv", indexes={@ORM\Index(name="przetargi_cpv_idx1", columns={"przetarg_id"}), @ORM\Index(name="przetargi_cpv_idx2", columns={"part_id"}), @ORM\Index(name="przetargi_cpv_idx3", columns={"cpv"}), @ORM\Index(name="przetargi_cpv_idx4", columns={"_cpv"})})
 * @ORM\Entity
 */
class PrzetargiCpv
{   
    /**
     * @var integer
     *
     * //@ORM\Column(name="przetarg_id", type="bigint", nullable=false)
     * @ORM\Id
     * 
     * @ORM\ManyToOne(targetEntity="Przetargi", inversedBy="przetargiCpv")
     * @ORM\JoinColumn(name="przetarg_id", referencedColumnName="id")
     */
    private $przetargId;

    /**
     * @var integer
     * @ORM\Id
     * @ORM\Column(name="part_id", type="bigint", nullable=true)
     */
    private $partId;

    /**
     * @var string
     * @ORM\Id
     * @ORM\Column(name="cpv", type="string", length=24, nullable=false)
     */
    private $cpv = '';

    /**
     * @var integer
     * @ORM\Id
     * @ORM\Column(name="inx", type="integer", nullable=false)
     */
    private $inx = '0';

    /**
     * @var integer
     * @ORM\Id
     * @ORM\Column(name="_cpv", type="bigint", nullable=true)
     */
    private $_cpv;



    /**
     * Set przetargId
     *
     * @param \AppBundle\Entity\Przetargi $przetargId
     * @return PrzetargiCpv
     */
    public function setPrzetargId(\AppBundle\Entity\Przetargi $przetargId = null)
    {
        $this->przetargId = $przetargId;

        return $this;
    }

    /**
     * Get przetargId
     *
     * @return \AppBundle\Entity\Przetargi
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
     * @return PrzetargiCpv
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
     * Set cpv
     *
     * @param string $cpv
     *
     * @return PrzetargiCpv
     */
    public function setCpv($cpv)
    {
        $this->cpv = $cpv;

        return $this;
    }

    /**
     * Get cpv
     *
     * @return string
     */
    public function getCpv()
    {
        return $this->cpv;
    }

    /**
     * Set inx
     *
     * @param integer $inx
     *
     * @return PrzetargiCpv
     */
    public function setInx($inx)
    {
        $this->inx = $inx;

        return $this;
    }

    /**
     * Get inx
     *
     * @return integer
     */
    public function getInx()
    {
        return $this->inx;
    }

    /**
     * Set _cpv
     *
     * @param integer $_cpv
     *
     * @return PrzetargiCpv
     */
    public function set_cpv($_cpv)
    {
        $this->_cpv = $_cpv;

        return $this;
    }

    /**
     * Get _cpv
     *
     * @return integer
     */
    public function get_cpv()
    {
        return $this->_cpv;
    }

}
