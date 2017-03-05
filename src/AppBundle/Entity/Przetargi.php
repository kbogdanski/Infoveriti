<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Przetargi
 *
 * @ORM\Table(name="przetargi", indexes={@ORM\Index(name="przetargi_idx1", columns={"zp"}), @ORM\Index(name="przetargi_idx2", columns={"regon9"}), @ORM\Index(name="przetargi_idx3", columns={"regon"}), @ORM\Index(name="przetargi_idx4", columns={"data_publikacji"})})
 * @ORM\Entity(repositoryClass="AppBundle\Entity\PrzetargiRepository")
 */
class Przetargi
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
     * @var string
     *
     * @ORM\Column(name="zp", type="string", length=24, nullable=false)
     */
    private $zp = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="pozycja", type="integer", nullable=false)
     */
    private $pozycja = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_publikacji", type="date", nullable=false)
     */
    private $dataPublikacji = '0000-00-00';

    /**
     * @var string
     *
     * @ORM\Column(name="nazwa", type="string", length=1024, nullable=false)
     */
    private $nazwa = '';

    /**
     * @var string
     *
     * @ORM\Column(name="ulica", type="string", length=1024, nullable=false)
     */
    private $ulica = '';

    /**
     * @var string
     *
     * @ORM\Column(name="nr_domu", type="string", length=24, nullable=false)
     */
    private $nrDomu = '';

    /**
     * @var string
     *
     * @ORM\Column(name="nr_miesz", type="string", length=24, nullable=false)
     */
    private $nrMiesz = '';

    /**
     * @var string
     *
     * @ORM\Column(name="miejscowosc", type="string", length=255, nullable=false)
     */
    private $miejscowosc = '';

    /**
     * @var string
     *
     * @ORM\Column(name="kod_poczt", type="string", length=24, nullable=false)
     */
    private $kodPoczt = '';

    /**
     * @var string
     *
     * @ORM\Column(name="wojewodztwo", type="string", length=128, nullable=false)
     */
    private $wojewodztwo = '';

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=64, nullable=false)
     */
    private $tel = '';

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=64, nullable=false)
     */
    private $fax = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="regon", type="bigint", nullable=true)
     */
    private $regon;

    /**
     * @var integer
     *
     * @ORM\Column(name="regon9", type="bigint", nullable=true)
     */
    private $regon9;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="www", type="string", length=255, nullable=true)
     */
    private $www;

    /**
     * @ORM\OneToOne(targetEntity="PrzetargiExtrasShortkrs", mappedBy="przetargId")
     */
    private $przetargiExtrasShortkrs;
    
    /**
     * @ORM\OneToMany(targetEntity="PrzetargiCpv", mappedBy="przetargId")
     */
    private $przetargiCpv;


    /**
     * Set zp
     *
     * @param string $zp
     *
     * @return Przetargi
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
     * Set pozycja
     *
     * @param integer $pozycja
     *
     * @return Przetargi
     */
    public function setPozycja($pozycja)
    {
        $this->pozycja = $pozycja;

        return $this;
    }

    /**
     * Get pozycja
     *
     * @return integer
     */
    public function getPozycja()
    {
        return $this->pozycja;
    }

    /**
     * Set dataPublikacji
     *
     * @param \DateTime $dataPublikacji
     *
     * @return Przetargi
     */
    public function setDataPublikacji($dataPublikacji)
    {
        $this->dataPublikacji = $dataPublikacji;

        return $this;
    }

    /**
     * Get dataPublikacji
     *
     * @return \DateTime
     */
    public function getDataPublikacji()
    {
        return $this->dataPublikacji;
    }

    /**
     * Set nazwa
     *
     * @param string $nazwa
     *
     * @return Przetargi
     */
    public function setNazwa($nazwa)
    {
        $this->nazwa = $nazwa;

        return $this;
    }

    /**
     * Get nazwa
     *
     * @return string
     */
    public function getNazwa()
    {
        return $this->nazwa;
    }

    /**
     * Set ulica
     *
     * @param string $ulica
     *
     * @return Przetargi
     */
    public function setUlica($ulica)
    {
        $this->ulica = $ulica;

        return $this;
    }

    /**
     * Get ulica
     *
     * @return string
     */
    public function getUlica()
    {
        return $this->ulica;
    }

    /**
     * Set nrDomu
     *
     * @param string $nrDomu
     *
     * @return Przetargi
     */
    public function setNrDomu($nrDomu)
    {
        $this->nrDomu = $nrDomu;

        return $this;
    }

    /**
     * Get nrDomu
     *
     * @return string
     */
    public function getNrDomu()
    {
        return $this->nrDomu;
    }

    /**
     * Set nrMiesz
     *
     * @param string $nrMiesz
     *
     * @return Przetargi
     */
    public function setNrMiesz($nrMiesz)
    {
        $this->nrMiesz = $nrMiesz;

        return $this;
    }

    /**
     * Get nrMiesz
     *
     * @return string
     */
    public function getNrMiesz()
    {
        return $this->nrMiesz;
    }

    /**
     * Set miejscowosc
     *
     * @param string $miejscowosc
     *
     * @return Przetargi
     */
    public function setMiejscowosc($miejscowosc)
    {
        $this->miejscowosc = $miejscowosc;

        return $this;
    }

    /**
     * Get miejscowosc
     *
     * @return string
     */
    public function getMiejscowosc()
    {
        return $this->miejscowosc;
    }

    /**
     * Set kodPoczt
     *
     * @param string $kodPoczt
     *
     * @return Przetargi
     */
    public function setKodPoczt($kodPoczt)
    {
        $this->kodPoczt = $kodPoczt;

        return $this;
    }

    /**
     * Get kodPoczt
     *
     * @return string
     */
    public function getKodPoczt()
    {
        return $this->kodPoczt;
    }

    /**
     * Set wojewodztwo
     *
     * @param string $wojewodztwo
     *
     * @return Przetargi
     */
    public function setWojewodztwo($wojewodztwo)
    {
        $this->wojewodztwo = $wojewodztwo;

        return $this;
    }

    /**
     * Get wojewodztwo
     *
     * @return string
     */
    public function getWojewodztwo()
    {
        return $this->wojewodztwo;
    }

    /**
     * Set tel
     *
     * @param string $tel
     *
     * @return Przetargi
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set fax
     *
     * @param string $fax
     *
     * @return Przetargi
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set regon
     *
     * @param integer $regon
     *
     * @return Przetargi
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
     * Set regon9
     *
     * @param integer $regon9
     *
     * @return Przetargi
     */
    public function setRegon9($regon9)
    {
        $this->regon9 = $regon9;

        return $this;
    }

    /**
     * Get regon9
     *
     * @return integer
     */
    public function getRegon9()
    {
        return $this->regon9;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Przetargi
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set www
     *
     * @param string $www
     *
     * @return Przetargi
     */
    public function setWww($www)
    {
        $this->www = $www;

        return $this;
    }

    /**
     * Get www
     *
     * @return string
     */
    public function getWww()
    {
        return $this->www;
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

    /**
     * Set przetargiExtrasShortkrs
     *
     * @param \AppBundle\Entity\PrzetargiExtrasShortkrs $przetargiExtrasShortkrs
     *
     * @return Przetargi
     */
    public function setPrzetargiExtrasShortkrs(\AppBundle\Entity\PrzetargiExtrasShortkrs $przetargiExtrasShortkrs = null)
    {
        $this->przetargiExtrasShortkrs = $przetargiExtrasShortkrs;

        return $this;
    }

    /**
     * Get przetargiExtrasShortkrs
     *
     * @return \AppBundle\Entity\PrzetargiExtrasShortkrs
     */
    public function getPrzetargiExtrasShortkrs()
    {
        return $this->przetargiExtrasShortkrs;
    }
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->przetargiExtrasShortkrs = new PrzetargiExtrasShortkrs();
        $this->przetargiCpv = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add przetargiCpv
     *
     * @param \AppBundle\Entity\PrzetargiCpv $przetargiCpv
     *
     * @return Przetargi
     */
    public function addPrzetargiCpv(\AppBundle\Entity\PrzetargiCpv $przetargiCpv)
    {
        $this->przetargiCpv[] = $przetargiCpv;

        return $this;
    }

    /**
     * Remove przetargiCpv
     *
     * @param \AppBundle\Entity\PrzetargiCpv $przetargiCpv
     */
    public function removePrzetargiCpv(\AppBundle\Entity\PrzetargiCpv $przetargiCpv)
    {
        $this->przetargiCpv->removeElement($przetargiCpv);
    }

    /**
     * Get przetargiCpv
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPrzetargiCpv()
    {
        return $this->przetargiCpv;
    }
}
