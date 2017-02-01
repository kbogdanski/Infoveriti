<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PrzetargiWinnersShortKrs
 *
 * @ORM\Table(name="przetargi_winners_short_krs", indexes={@ORM\Index(name="przetargi_winners_short_krs_idx1", columns={"przetarg_id"}), @ORM\Index(name="przetargi_winners_short_krs_idx2", columns={"part_id"}), @ORM\Index(name="przetargi_winners_short_krs_idx3", columns={"krs"}), @ORM\Index(name="przetargi_winners_short_krs_idx4", columns={"data_publikacji"}), @ORM\Index(name="przetargi_winners_short_krs_idx5", columns={"regon9"}), @ORM\Index(name="krs", columns={"krs"}), @ORM\Index(name="wyk_id", columns={"wyk_id"})})
 * @ORM\Entity
 */
class PrzetargiWinnersShortKrs
{
    /**
     * @var integer
     *
     * @ORM\Column(name="przetarg_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $przetargId;

    /**
     * @var integer
     *
     * @ORM\Column(name="part_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $partId;

    /**
     * @var integer
     *
     * @ORM\Column(name="krs", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $krs;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_publikacji", type="date", nullable=true)
     */
    private $dataPublikacji;

    /**
     * @var integer
     *
     * @ORM\Column(name="pozycja", type="integer", nullable=true)
     */
    private $pozycja;

    /**
     * @var string
     *
     * @ORM\Column(name="zp", type="string", length=24, nullable=true)
     */
    private $zp;

    /**
     * @var string
     *
     * @ORM\Column(name="nazwa", type="string", length=1024, nullable=true)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="ulica", type="string", length=1024, nullable=true)
     */
    private $ulica;

    /**
     * @var string
     *
     * @ORM\Column(name="nr_domu", type="string", length=24, nullable=true)
     */
    private $nrDomu;

    /**
     * @var string
     *
     * @ORM\Column(name="nr_miesz", type="string", length=24, nullable=true)
     */
    private $nrMiesz;

    /**
     * @var string
     *
     * @ORM\Column(name="miejscowosc", type="string", length=255, nullable=true)
     */
    private $miejscowosc;

    /**
     * @var string
     *
     * @ORM\Column(name="kod_poczt", type="string", length=24, nullable=true)
     */
    private $kodPoczt;

    /**
     * @var string
     *
     * @ORM\Column(name="wojewodztwo", type="string", length=128, nullable=true)
     */
    private $wojewodztwo;

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=64, nullable=true)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=64, nullable=true)
     */
    private $fax;

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
     * @ORM\Column(name="rodzaj_zam", type="string", length=512, nullable=true)
     */
    private $rodzajZam;

    /**
     * @var string
     *
     * @ORM\Column(name="nazwa_zamowienia", type="string", length=8192, nullable=true)
     */
    private $nazwaZamowienia;

    /**
     * @var string
     *
     * @ORM\Column(name="rodz_zam", type="string", length=10, nullable=true)
     */
    private $rodzZam;

    /**
     * @var string
     *
     * @ORM\Column(name="przedmiot_zam", type="text", length=16777215, nullable=true)
     */
    private $przedmiotZam;

    /**
     * @var string
     *
     * @ORM\Column(name="cpv", type="string", length=512, nullable=true)
     */
    private $cpv;

    /**
     * @var integer
     *
     * @ORM\Column(name="part_no", type="integer", nullable=true)
     */
    private $partNo;

    /**
     * @var string
     *
     * @ORM\Column(name="part_nazwa", type="string", length=2048, nullable=true)
     */
    private $partNazwa;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="part_data_zam", type="date", nullable=true)
     */
    private $partDataZam;

    /**
     * @var integer
     *
     * @ORM\Column(name="part_liczba_ofert", type="integer", nullable=true)
     */
    private $partLiczbaOfert;

    /**
     * @var integer
     *
     * @ORM\Column(name="part_liczba_odrzuconych_ofert", type="integer", nullable=true)
     */
    private $partLiczbaOdrzuconychOfert;

    /**
     * @var float
     *
     * @ORM\Column(name="part_wartosc", type="float", precision=15, scale=2, nullable=true)
     */
    private $partWartosc;

    /**
     * @var float
     *
     * @ORM\Column(name="part_cena", type="float", precision=15, scale=2, nullable=true)
     */
    private $partCena;

    /**
     * @var float
     *
     * @ORM\Column(name="part_cena_min", type="float", precision=15, scale=2, nullable=true)
     */
    private $partCenaMin;

    /**
     * @var float
     *
     * @ORM\Column(name="part_cena_max", type="float", precision=15, scale=2, nullable=true)
     */
    private $partCenaMax;

    /**
     * @var string
     *
     * @ORM\Column(name="part_waluta", type="string", length=5, nullable=true)
     */
    private $partWaluta;

    /**
     * @var string
     *
     * @ORM\Column(name="wyk_id", type="string", length=32, nullable=true)
     */
    private $wykId;

    /**
     * @var string
     *
     * @ORM\Column(name="win_nazwa", type="string", length=1024, nullable=true)
     */
    private $winNazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="win_ulica", type="string", length=255, nullable=true)
     */
    private $winUlica;

    /**
     * @var string
     *
     * @ORM\Column(name="win_kod", type="string", length=10, nullable=true)
     */
    private $winKod;

    /**
     * @var string
     *
     * @ORM\Column(name="win_miejscowosc", type="string", length=255, nullable=true)
     */
    private $winMiejscowosc;

    /**
     * @var string
     *
     * @ORM\Column(name="win_woj", type="string", length=64, nullable=true)
     */
    private $winWoj;



    /**
     * Set dataPublikacji
     *
     * @param \DateTime $dataPublikacji
     *
     * @return PrzetargiWinnersShortKrs
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
     * Set pozycja
     *
     * @param integer $pozycja
     *
     * @return PrzetargiWinnersShortKrs
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
     * Set zp
     *
     * @param string $zp
     *
     * @return PrzetargiWinnersShortKrs
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
     * Set nazwa
     *
     * @param string $nazwa
     *
     * @return PrzetargiWinnersShortKrs
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
     * @return PrzetargiWinnersShortKrs
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
     * @return PrzetargiWinnersShortKrs
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
     * @return PrzetargiWinnersShortKrs
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
     * @return PrzetargiWinnersShortKrs
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
     * @return PrzetargiWinnersShortKrs
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
     * @return PrzetargiWinnersShortKrs
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
     * @return PrzetargiWinnersShortKrs
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
     * @return PrzetargiWinnersShortKrs
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
     * Set email
     *
     * @param string $email
     *
     * @return PrzetargiWinnersShortKrs
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
     * @return PrzetargiWinnersShortKrs
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
     * Set regon
     *
     * @param integer $regon
     *
     * @return PrzetargiWinnersShortKrs
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
     * @return PrzetargiWinnersShortKrs
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
     * Set rodzajZam
     *
     * @param string $rodzajZam
     *
     * @return PrzetargiWinnersShortKrs
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
     * Set nazwaZamowienia
     *
     * @param string $nazwaZamowienia
     *
     * @return PrzetargiWinnersShortKrs
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
     * Set rodzZam
     *
     * @param string $rodzZam
     *
     * @return PrzetargiWinnersShortKrs
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
     * Set przedmiotZam
     *
     * @param string $przedmiotZam
     *
     * @return PrzetargiWinnersShortKrs
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
     * Set cpv
     *
     * @param string $cpv
     *
     * @return PrzetargiWinnersShortKrs
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
     * Set partNo
     *
     * @param integer $partNo
     *
     * @return PrzetargiWinnersShortKrs
     */
    public function setPartNo($partNo)
    {
        $this->partNo = $partNo;

        return $this;
    }

    /**
     * Get partNo
     *
     * @return integer
     */
    public function getPartNo()
    {
        return $this->partNo;
    }

    /**
     * Set partNazwa
     *
     * @param string $partNazwa
     *
     * @return PrzetargiWinnersShortKrs
     */
    public function setPartNazwa($partNazwa)
    {
        $this->partNazwa = $partNazwa;

        return $this;
    }

    /**
     * Get partNazwa
     *
     * @return string
     */
    public function getPartNazwa()
    {
        return $this->partNazwa;
    }

    /**
     * Set partDataZam
     *
     * @param \DateTime $partDataZam
     *
     * @return PrzetargiWinnersShortKrs
     */
    public function setPartDataZam($partDataZam)
    {
        $this->partDataZam = $partDataZam;

        return $this;
    }

    /**
     * Get partDataZam
     *
     * @return \DateTime
     */
    public function getPartDataZam()
    {
        return $this->partDataZam;
    }

    /**
     * Set partLiczbaOfert
     *
     * @param integer $partLiczbaOfert
     *
     * @return PrzetargiWinnersShortKrs
     */
    public function setPartLiczbaOfert($partLiczbaOfert)
    {
        $this->partLiczbaOfert = $partLiczbaOfert;

        return $this;
    }

    /**
     * Get partLiczbaOfert
     *
     * @return integer
     */
    public function getPartLiczbaOfert()
    {
        return $this->partLiczbaOfert;
    }

    /**
     * Set partLiczbaOdrzuconychOfert
     *
     * @param integer $partLiczbaOdrzuconychOfert
     *
     * @return PrzetargiWinnersShortKrs
     */
    public function setPartLiczbaOdrzuconychOfert($partLiczbaOdrzuconychOfert)
    {
        $this->partLiczbaOdrzuconychOfert = $partLiczbaOdrzuconychOfert;

        return $this;
    }

    /**
     * Get partLiczbaOdrzuconychOfert
     *
     * @return integer
     */
    public function getPartLiczbaOdrzuconychOfert()
    {
        return $this->partLiczbaOdrzuconychOfert;
    }

    /**
     * Set partWartosc
     *
     * @param float $partWartosc
     *
     * @return PrzetargiWinnersShortKrs
     */
    public function setPartWartosc($partWartosc)
    {
        $this->partWartosc = $partWartosc;

        return $this;
    }

    /**
     * Get partWartosc
     *
     * @return float
     */
    public function getPartWartosc()
    {
        return $this->partWartosc;
    }

    /**
     * Set partCena
     *
     * @param float $partCena
     *
     * @return PrzetargiWinnersShortKrs
     */
    public function setPartCena($partCena)
    {
        $this->partCena = $partCena;

        return $this;
    }

    /**
     * Get partCena
     *
     * @return float
     */
    public function getPartCena()
    {
        return $this->partCena;
    }

    /**
     * Set partCenaMin
     *
     * @param float $partCenaMin
     *
     * @return PrzetargiWinnersShortKrs
     */
    public function setPartCenaMin($partCenaMin)
    {
        $this->partCenaMin = $partCenaMin;

        return $this;
    }

    /**
     * Get partCenaMin
     *
     * @return float
     */
    public function getPartCenaMin()
    {
        return $this->partCenaMin;
    }

    /**
     * Set partCenaMax
     *
     * @param float $partCenaMax
     *
     * @return PrzetargiWinnersShortKrs
     */
    public function setPartCenaMax($partCenaMax)
    {
        $this->partCenaMax = $partCenaMax;

        return $this;
    }

    /**
     * Get partCenaMax
     *
     * @return float
     */
    public function getPartCenaMax()
    {
        return $this->partCenaMax;
    }

    /**
     * Set partWaluta
     *
     * @param string $partWaluta
     *
     * @return PrzetargiWinnersShortKrs
     */
    public function setPartWaluta($partWaluta)
    {
        $this->partWaluta = $partWaluta;

        return $this;
    }

    /**
     * Get partWaluta
     *
     * @return string
     */
    public function getPartWaluta()
    {
        return $this->partWaluta;
    }

    /**
     * Set wykId
     *
     * @param string $wykId
     *
     * @return PrzetargiWinnersShortKrs
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
     * Set winNazwa
     *
     * @param string $winNazwa
     *
     * @return PrzetargiWinnersShortKrs
     */
    public function setWinNazwa($winNazwa)
    {
        $this->winNazwa = $winNazwa;

        return $this;
    }

    /**
     * Get winNazwa
     *
     * @return string
     */
    public function getWinNazwa()
    {
        return $this->winNazwa;
    }

    /**
     * Set winUlica
     *
     * @param string $winUlica
     *
     * @return PrzetargiWinnersShortKrs
     */
    public function setWinUlica($winUlica)
    {
        $this->winUlica = $winUlica;

        return $this;
    }

    /**
     * Get winUlica
     *
     * @return string
     */
    public function getWinUlica()
    {
        return $this->winUlica;
    }

    /**
     * Set winKod
     *
     * @param string $winKod
     *
     * @return PrzetargiWinnersShortKrs
     */
    public function setWinKod($winKod)
    {
        $this->winKod = $winKod;

        return $this;
    }

    /**
     * Get winKod
     *
     * @return string
     */
    public function getWinKod()
    {
        return $this->winKod;
    }

    /**
     * Set winMiejscowosc
     *
     * @param string $winMiejscowosc
     *
     * @return PrzetargiWinnersShortKrs
     */
    public function setWinMiejscowosc($winMiejscowosc)
    {
        $this->winMiejscowosc = $winMiejscowosc;

        return $this;
    }

    /**
     * Get winMiejscowosc
     *
     * @return string
     */
    public function getWinMiejscowosc()
    {
        return $this->winMiejscowosc;
    }

    /**
     * Set winWoj
     *
     * @param string $winWoj
     *
     * @return PrzetargiWinnersShortKrs
     */
    public function setWinWoj($winWoj)
    {
        $this->winWoj = $winWoj;

        return $this;
    }

    /**
     * Get winWoj
     *
     * @return string
     */
    public function getWinWoj()
    {
        return $this->winWoj;
    }

    /**
     * Set przetargId
     *
     * @param integer $przetargId
     *
     * @return PrzetargiWinnersShortKrs
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
     * Set partId
     *
     * @param integer $partId
     *
     * @return PrzetargiWinnersShortKrs
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
     * Set krs
     *
     * @param integer $krs
     *
     * @return PrzetargiWinnersShortKrs
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
}
