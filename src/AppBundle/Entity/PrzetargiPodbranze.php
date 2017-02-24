<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JsonSerializable;

/**
 * PrzetargiPodbranze
 *
 * @ORM\Table(name="przetargi_podbranze")
 * @ORM\Entity
 */
class PrzetargiPodbranze implements JsonSerializable
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
     * @ORM\ManyToOne(targetEntity="PrzetargiBranze", inversedBy="mojePodbranze")
     * @ORM\JoinColumn(name="branza_id", referencedColumnName="id")
     */
    private $branza_id;


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
     * Set branzaId
     *
     * @param \AppBundle\Entity\PrzetargiBranze $branzaId
     *
     * @return PrzetargiPodbranze
     */
    public function setBranzaId(\AppBundle\Entity\PrzetargiBranze $branzaId = null)
    {
        $this->branza_id = $branzaId;

        return $this;
    }

    /**
     * Get branzaId
     *
     * @return \AppBundle\Entity\PrzetargiBranze
     */
    public function getBranzaId()
    {
        return $this->branza_id;
    }

    public function jsonSerialize() {
        return array(
            'id' => $this->id,
            'cpv' => $this->cpv,
            'podbranza' => $this->podbranza,
                );
    }

}
