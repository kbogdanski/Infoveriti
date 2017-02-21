<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PrzetargiPodbranze
 *
 * @ORM\Table(name="przetargi_podbranze")
 * @ORM\Entity
 */
class PrzetargiPodbranze
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="cpv", type="string", length=10, nullable=false)
     */
    private $cpv;

    /**
     * @var string
     *
     * @ORM\Column(name="podbranza", type="string", length=255, nullable=false)
     */
    private $podbranza;
    
    /**
     * @ORM\ManyToOne(targetEntity="PrzetargiBranze", inversedBy="features")
     * @ORM\JoinColumn(name="branza_id", referencedColumnName="id")
     */
    private $branza;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set cpv
     *
     * @param string $cpv
     *
     * @return PrzetargiPodbranze
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
     * Set podbranza
     *
     * @param string $podbranza
     *
     * @return PrzetargiPodbranze
     */
    public function setPodbranza($podbranza)
    {
        $this->podbranza = $podbranza;

        return $this;
    }

    /**
     * Get podbranza
     *
     * @return string
     */
    public function getPodbranza()
    {
        return $this->podbranza;
    }

    /**
     * Set branza
     *
     * @param \AppBundle\Entity\PrzetargiBranze $branza
     *
     * @return PrzetargiPodbranze
     */
    public function setBranza(\AppBundle\Entity\PrzetargiBranze $branza = null)
    {
        $this->branza = $branza;

        return $this;
    }

    /**
     * Get branza
     *
     * @return \AppBundle\Entity\PrzetargiBranze
     */
    public function getBranza()
    {
        return $this->branza;
    }
}
