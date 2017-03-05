<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PrzetargiExtrasShortkrs
 *
 * @ORM\Table(name="przetargi_extras_shortkrs")
 * @ORM\Entity
 */
class PrzetargiExtrasShortkrs
{
    /**
     * @var integer
     *
     * //@ORM\JoinColumn(name="przetarg_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * 
     * @ORM\OneToOne(targetEntity="Przetargi", inversedBy="przetargiExtrasShortkrs")
     * @ORM\JoinColumn(name="przetarg_id", referencedColumnName="id")
     */
    private $przetargId;
    
    /**
     * @var string
     *
     * @ORM\Column(name="nazwa_zamowienia", type="text", length=16777215, nullable=true)
     */
    private $nazwaZamowienia;

    /**
     * @var string
     *
     * @ORM\Column(name="przedmiot_zam", type="text", length=16777215, nullable=true)
     */
    private $przedmiotZam;

    /**
     * @var string
     *
     * @ORM\Column(name="rodzaj_zam", type="text", length=16777215, nullable=true)
     */
    private $rodzajZam;

    /**
     * @var string
     *
     * @ORM\Column(name="rodz_zam", type="text", length=16777215, nullable=true)
     */
    private $rodzZam;



    /**
     * Set nazwaZamowienia
     *
     * @param string $nazwaZamowienia
     *
     * @return PrzetargiExtrasShortkrs
     */
    public function setNazwaZamowienia($nazwaZamowienia)
    {
        $this->nazwaZamowienia = $nazwaZamowienia;

        return $this;
    }

    /**
     * Get nazwaZamowienia
     *
     * @return string
     */
    public function getNazwaZamowienia()
    {
        return $this->nazwaZamowienia;
    }

    /**
     * Set przedmiotZam
     *
     * @param string $przedmiotZam
     *
     * @return PrzetargiExtrasShortkrs
     */
    public function setPrzedmiotZam($przedmiotZam)
    {
        $this->przedmiotZam = $przedmiotZam;

        return $this;
    }

    /**
     * Get przedmiotZam
     *
     * @return string
     */
    public function getPrzedmiotZam()
    {
        return $this->przedmiotZam;
    }

    /**
     * Set rodzajZam
     *
     * @param string $rodzajZam
     *
     * @return PrzetargiExtrasShortkrs
     */
    public function setRodzajZam($rodzajZam)
    {
        $this->rodzajZam = $rodzajZam;

        return $this;
    }

    /**
     * Get rodzajZam
     *
     * @return string
     */
    public function getRodzajZam()
    {
        return $this->rodzajZam;
    }

    /**
     * Set rodzZam
     *
     * @param string $rodzZam
     *
     * @return PrzetargiExtrasShortkrs
     */
    public function setRodzZam($rodzZam)
    {
        $this->rodzZam = $rodzZam;

        return $this;
    }

    /**
     * Get rodzZam
     *
     * @return string
     */
    public function getRodzZam()
    {
        return $this->rodzZam;
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
}
