<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PrzetargiWyk
 *
 * @ORM\Table(name="przetargi_wyk", indexes={@ORM\Index(name="przetargi_wyk_idx1", columns={"regon"}), @ORM\Index(name="przetargi_wyk_idx2", columns={"_nazwa"})})
 * @ORM\Entity
 */
class PrzetargiWyk
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=32, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nazwa", type="string", length=1024, nullable=false)
     */
    private $nazwa = '';

    /**
     * @var string
     *
     * @ORM\Column(name="_nazwa", type="string", length=1024, nullable=false)
     */
    private $_nazwa = '';

    /**
     * @var string
     *
     * @ORM\Column(name="ulica", type="string", length=255, nullable=false)
     */
    private $ulica = '';

    /**
     * @var string
     *
     * @ORM\Column(name="miejscowosc", type="string", length=255, nullable=false)
     */
    private $miejscowosc = '';

    /**
     * @var string
     *
     * @ORM\Column(name="kod", type="string", length=10, nullable=false)
     */
    private $kod = '';

    /**
     * @var string
     *
     * @ORM\Column(name="wojewodztwo", type="string", length=64, nullable=false)
     */
    private $wojewodztwo = '';

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=128, nullable=false)
     */
    private $email = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="regon", type="bigint", nullable=true)
     */
    private $regon;

    /**
     * @var string
     *
     * @ORM\Column(name="wyk_txt", type="string", length=4096, nullable=false)
     */
    private $wykTxt = '';

    /**
     * @var string
     *
     * @ORM\Column(name="nazwa_words", type="string", length=1024, nullable=false)
     */
    private $nazwaWords = '';

    /**
     * @var string
     *
     * @ORM\Column(name="adres_words", type="string", length=512, nullable=false)
     */
    private $adresWords = '';

    /**
     * @var string
     *
     * @ORM\Column(name="woj_words", type="string", length=64, nullable=false)
     */
    private $wojWords = '';

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=24, nullable=false)
     */
    private $type = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_set_firms", type="boolean", nullable=false)
     */
    private $isSetFirms = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_automat_read", type="boolean", nullable=false)
     */
    private $isAutomatRead = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="automat_data_read", type="datetime", nullable=false)
     */
    private $automatDataRead = '0000-00-00 00:00:00';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_human", type="boolean", nullable=false)
     */
    private $isHuman = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="pomin", type="boolean", nullable=false)
     */
    private $pomin = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_wprow", type="datetime", nullable=true)
     */
    private $dataWprow;



    /**
     * Set nazwa
     *
     * @param string $nazwa
     *
     * @return PrzetargiWyk
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
     * Set _nazwa
     *
     * @param string $_nazwa
     *
     * @return PrzetargiWyk
     */
    public function set_nazwa($_nazwa)
    {
        $this->_nazwa = $_nazwa;

        return $this;
    }

    /**
     * Get _nazwa
     *
     * @return string
     */
    public function get_nazwa()
    {
        return $this->_nazwa;
    }

    /**
     * Set ulica
     *
     * @param string $ulica
     *
     * @return PrzetargiWyk
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
     * Set miejscowosc
     *
     * @param string $miejscowosc
     *
     * @return PrzetargiWyk
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
     * Set kod
     *
     * @param string $kod
     *
     * @return PrzetargiWyk
     */
    public function setKod($kod)
    {
        $this->kod = $kod;

        return $this;
    }

    /**
     * Get kod
     *
     * @return string
     */
    public function getKod()
    {
        return $this->kod;
    }

    /**
     * Set wojewodztwo
     *
     * @param string $wojewodztwo
     *
     * @return PrzetargiWyk
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
     * Set email
     *
     * @param string $email
     *
     * @return PrzetargiWyk
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
     * Set regon
     *
     * @param integer $regon
     *
     * @return PrzetargiWyk
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
     * Set wykTxt
     *
     * @param string $wykTxt
     *
     * @return PrzetargiWyk
     */
    public function setWykTxt($wykTxt)
    {
        $this->wykTxt = $wykTxt;

        return $this;
    }

    /**
     * Get wykTxt
     *
     * @return string
     */
    public function getWykTxt()
    {
        return $this->wykTxt;
    }

    /**
     * Set nazwaWords
     *
     * @param string $nazwaWords
     *
     * @return PrzetargiWyk
     */
    public function setNazwaWords($nazwaWords)
    {
        $this->nazwaWords = $nazwaWords;

        return $this;
    }

    /**
     * Get nazwaWords
     *
     * @return string
     */
    public function getNazwaWords()
    {
        return $this->nazwaWords;
    }

    /**
     * Set adresWords
     *
     * @param string $adresWords
     *
     * @return PrzetargiWyk
     */
    public function setAdresWords($adresWords)
    {
        $this->adresWords = $adresWords;

        return $this;
    }

    /**
     * Get adresWords
     *
     * @return string
     */
    public function getAdresWords()
    {
        return $this->adresWords;
    }

    /**
     * Set wojWords
     *
     * @param string $wojWords
     *
     * @return PrzetargiWyk
     */
    public function setWojWords($wojWords)
    {
        $this->wojWords = $wojWords;

        return $this;
    }

    /**
     * Get wojWords
     *
     * @return string
     */
    public function getWojWords()
    {
        return $this->wojWords;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return PrzetargiWyk
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set isSetFirms
     *
     * @param boolean $isSetFirms
     *
     * @return PrzetargiWyk
     */
    public function setIsSetFirms($isSetFirms)
    {
        $this->isSetFirms = $isSetFirms;

        return $this;
    }

    /**
     * Get isSetFirms
     *
     * @return boolean
     */
    public function getIsSetFirms()
    {
        return $this->isSetFirms;
    }

    /**
     * Set isAutomatRead
     *
     * @param boolean $isAutomatRead
     *
     * @return PrzetargiWyk
     */
    public function setIsAutomatRead($isAutomatRead)
    {
        $this->isAutomatRead = $isAutomatRead;

        return $this;
    }

    /**
     * Get isAutomatRead
     *
     * @return boolean
     */
    public function getIsAutomatRead()
    {
        return $this->isAutomatRead;
    }

    /**
     * Set automatDataRead
     *
     * @param \DateTime $automatDataRead
     *
     * @return PrzetargiWyk
     */
    public function setAutomatDataRead($automatDataRead)
    {
        $this->automatDataRead = $automatDataRead;

        return $this;
    }

    /**
     * Get automatDataRead
     *
     * @return \DateTime
     */
    public function getAutomatDataRead()
    {
        return $this->automatDataRead;
    }

    /**
     * Set isHuman
     *
     * @param boolean $isHuman
     *
     * @return PrzetargiWyk
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

    /**
     * Set pomin
     *
     * @param boolean $pomin
     *
     * @return PrzetargiWyk
     */
    public function setPomin($pomin)
    {
        $this->pomin = $pomin;

        return $this;
    }

    /**
     * Get pomin
     *
     * @return boolean
     */
    public function getPomin()
    {
        return $this->pomin;
    }

    /**
     * Set dataWprow
     *
     * @param \DateTime $dataWprow
     *
     * @return PrzetargiWyk
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
     * Get id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
}
