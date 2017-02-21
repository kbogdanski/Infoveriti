<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PrzetargiBranze
 *
 * @ORM\Table(name="przetargi_branze")
 * @ORM\Entity
 */
class PrzetargiBranze
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
     * @ORM\Column(name="branza", type="string", length=255, nullable=false)
     */
    private $branza;
    
    /**
     * @ORM\OneToMany(targetEntity="PrzetargiPodbranze", mappedBy="branza")
     */
    private $podbranze;


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
     * @return PrzetargiBranze
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
     * Set branza
     *
     * @param string $branza
     *
     * @return PrzetargiBranze
     */
    public function setBranza($branza)
    {
        $this->branza = $branza;

        return $this;
    }

    /**
     * Get branza
     *
     * @return string
     */
    public function getBranza()
    {
        return $this->branza;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->podbranze = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add podbranze
     *
     * @param \AppBundle\Entity\PrzetargiPodbranze $podbranze
     *
     * @return PrzetargiBranze
     */
    public function addPodbranze(\AppBundle\Entity\PrzetargiPodbranze $podbranze)
    {
        $this->podbranze[] = $podbranze;

        return $this;
    }

    /**
     * Remove podbranze
     *
     * @param \AppBundle\Entity\PrzetargiPodbranze $podbranze
     */
    public function removePodbranze(\AppBundle\Entity\PrzetargiPodbranze $podbranze)
    {
        $this->podbranze->removeElement($podbranze);
    }

    /**
     * Get podbranze
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPodbranze()
    {
        return $this->podbranze;
    }
}
