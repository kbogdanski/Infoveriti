<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PrzetargiCz
 *
 * @ORM\Table(name="przetargi_cz", indexes={@ORM\Index(name="przetargi_cz_idx1", columns={"przetarg_id"})})
 * @ORM\Entity
 */
class PrzetargiCz
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
     * @ORM\Column(name="przetarg_id", type="bigint", nullable=false)
     */
    private $przetargId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="zp", type="string", length=10, nullable=true)
     */
    private $zp;

    /**
     * @var integer
     *
     * @ORM\Column(name="nr", type="integer", nullable=false)
     */
    private $nr = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="nr_czesci", type="integer", nullable=true)
     */
    private $nrCzesci;

    /**
     * @var string
     *
     * @ORM\Column(name="nazwa", type="string", length=2048, nullable=false)
     */
    private $nazwa = '';

    /**
     * @var string
     *
     * @ORM\Column(name="opis", type="string", length=4096, nullable=true)
     */
    private $opis;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_zam", type="date", nullable=true)
     */
    private $dataZam;

    /**
     * @var integer
     *
     * @ORM\Column(name="liczba_ofert", type="integer", nullable=true)
     */
    private $liczbaOfert;

    /**
     * @var integer
     *
     * @ORM\Column(name="liczba_odrzuconych_ofert", type="integer", nullable=true)
     */
    private $liczbaOdrzuconychOfert;

    /**
     * @var string
     *
     * @ORM\Column(name="czas", type="string", length=10, nullable=true)
     */
    private $czas;

    /**
     * @var integer
     *
     * @ORM\Column(name="czas_dni", type="integer", nullable=true)
     */
    private $czasDni;

    /**
     * @var integer
     *
     * @ORM\Column(name="czas_mies", type="integer", nullable=true)
     */
    private $czasMies;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_roz", type="date", nullable=true)
     */
    private $dataRoz;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_kon", type="date", nullable=true)
     */
    private $dataKon;

    /**
     * @var string
     *
     * @ORM\Column(name="kryt_cena", type="string", length=64, nullable=true)
     */
    private $krytCena;

    /**
     * @var string
     *
     * @ORM\Column(name="kryt_1p", type="string", length=128, nullable=true)
     */
    private $kryt1p;

    /**
     * @var string
     *
     * @ORM\Column(name="kryt_2", type="string", length=128, nullable=true)
     */
    private $kryt2;

    /**
     * @var string
     *
     * @ORM\Column(name="kryt_2p", type="string", length=128, nullable=true)
     */
    private $kryt2p;

    /**
     * @var float
     *
     * @ORM\Column(name="wartosc", type="float", precision=15, scale=2, nullable=true)
     */
    private $wartosc;

    /**
     * @var float
     *
     * @ORM\Column(name="szacunkowa_wartosc_zamowienia_calkowita", type="float", precision=15, scale=2, nullable=true)
     */
    private $szacunkowaWartoscZamowieniaCalkowita;

    /**
     * @var float
     *
     * @ORM\Column(name="wartosc_procentowa_czesci_zamowienia", type="float", precision=15, scale=3, nullable=true)
     */
    private $wartoscProcentowaCzesciZamowienia;

    /**
     * @var float
     *
     * @ORM\Column(name="cena", type="float", precision=15, scale=2, nullable=true)
     */
    private $cena;

    /**
     * @var float
     *
     * @ORM\Column(name="cena_min", type="float", precision=15, scale=2, nullable=true)
     */
    private $cenaMin;

    /**
     * @var float
     *
     * @ORM\Column(name="cena_max", type="float", precision=15, scale=2, nullable=true)
     */
    private $cenaMax;

    /**
     * @var string
     *
     * @ORM\Column(name="waluta", type="string", length=5, nullable=true)
     */
    private $waluta;

    /**
     * @var string
     *
     * @ORM\Column(name="miejsce", type="string", length=255, nullable=true)
     */
    private $miejsce;

    /**
     * @var string
     *
     * @ORM\Column(name="adres", type="string", length=1024, nullable=true)
     */
    private $adres;

    /**
     * @var string
     *
     * @ORM\Column(name="miejscowosc", type="string", length=128, nullable=true)
     */
    private $miejscowosc;

    /**
     * @var string
     *
     * @ORM\Column(name="kod", type="string", length=10, nullable=true)
     */
    private $kod;

    /**
     * @var string
     *
     * @ORM\Column(name="wojewodztwo", type="string", length=64, nullable=true)
     */
    private $wojewodztwo;



    /**
     * Set przetargId
     *
     * @param integer $przetargId
     *
     * @return PrzetargiCz
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
     * @return PrzetargiCz
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
     * Set nr
     *
     * @param integer $nr
     *
     * @return PrzetargiCz
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
     * Set nrCzesci
     *
     * @param integer $nrCzesci
     *
     * @return PrzetargiCz
     */
    public function setNrCzesci($nrCzesci)
    {
        $this->nrCzesci = $nrCzesci;

        return $this;
    }

    /**
     * Get nrCzesci
     *
     * @return integer
     */
    public function getNrCzesci()
    {
        return $this->nrCzesci;
    }

    /**
     * Set nazwa
     *
     * @param string $nazwa
     *
     * @return PrzetargiCz
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
     * Set opis
     *
     * @param string $opis
     *
     * @return PrzetargiCz
     */
    public function setOpis($opis)
    {
        $this->opis = $opis;

        return $this;
    }

    /**
     * Get opis
     *
     * @return string
     */
    public function getOpis()
    {
        return $this->opis;
    }

    /**
     * Set dataZam
     *
     * @param \DateTime $dataZam
     *
     * @return PrzetargiCz
     */
    public function setDataZam($dataZam)
    {
        $this->dataZam = $dataZam;

        return $this;
    }

    /**
     * Get dataZam
     *
     * @return \DateTime
     */
    public function getDataZam()
    {
        return $this->dataZam;
    }

    /**
     * Set liczbaOfert
     *
     * @param integer $liczbaOfert
     *
     * @return PrzetargiCz
     */
    public function setLiczbaOfert($liczbaOfert)
    {
        $this->liczbaOfert = $liczbaOfert;

        return $this;
    }

    /**
     * Get liczbaOfert
     *
     * @return integer
     */
    public function getLiczbaOfert()
    {
        return $this->liczbaOfert;
    }

    /**
     * Set liczbaOdrzuconychOfert
     *
     * @param integer $liczbaOdrzuconychOfert
     *
     * @return PrzetargiCz
     */
    public function setLiczbaOdrzuconychOfert($liczbaOdrzuconychOfert)
    {
        $this->liczbaOdrzuconychOfert = $liczbaOdrzuconychOfert;

        return $this;
    }

    /**
     * Get liczbaOdrzuconychOfert
     *
     * @return integer
     */
    public function getLiczbaOdrzuconychOfert()
    {
        return $this->liczbaOdrzuconychOfert;
    }

    /**
     * Set czas
     *
     * @param string $czas
     *
     * @return PrzetargiCz
     */
    public function setCzas($czas)
    {
        $this->czas = $czas;

        return $this;
    }

    /**
     * Get czas
     *
     * @return string
     */
    public function getCzas()
    {
        return $this->czas;
    }

    /**
     * Set czasDni
     *
     * @param integer $czasDni
     *
     * @return PrzetargiCz
     */
    public function setCzasDni($czasDni)
    {
        $this->czasDni = $czasDni;

        return $this;
    }

    /**
     * Get czasDni
     *
     * @return integer
     */
    public function getCzasDni()
    {
        return $this->czasDni;
    }

    /**
     * Set czasMies
     *
     * @param integer $czasMies
     *
     * @return PrzetargiCz
     */
    public function setCzasMies($czasMies)
    {
        $this->czasMies = $czasMies;

        return $this;
    }

    /**
     * Get czasMies
     *
     * @return integer
     */
    public function getCzasMies()
    {
        return $this->czasMies;
    }

    /**
     * Set dataRoz
     *
     * @param \DateTime $dataRoz
     *
     * @return PrzetargiCz
     */
    public function setDataRoz($dataRoz)
    {
        $this->dataRoz = $dataRoz;

        return $this;
    }

    /**
     * Get dataRoz
     *
     * @return \DateTime
     */
    public function getDataRoz()
    {
        return $this->dataRoz;
    }

    /**
     * Set dataKon
     *
     * @param \DateTime $dataKon
     *
     * @return PrzetargiCz
     */
    public function setDataKon($dataKon)
    {
        $this->dataKon = $dataKon;

        return $this;
    }

    /**
     * Get dataKon
     *
     * @return \DateTime
     */
    public function getDataKon()
    {
        return $this->dataKon;
    }

    /**
     * Set krytCena
     *
     * @param string $krytCena
     *
     * @return PrzetargiCz
     */
    public function setKrytCena($krytCena)
    {
        $this->krytCena = $krytCena;

        return $this;
    }

    /**
     * Get krytCena
     *
     * @return string
     */
    public function getKrytCena()
    {
        return $this->krytCena;
    }

    /**
     * Set kryt1p
     *
     * @param string $kryt1p
     *
     * @return PrzetargiCz
     */
    public function setKryt1p($kryt1p)
    {
        $this->kryt1p = $kryt1p;

        return $this;
    }

    /**
     * Get kryt1p
     *
     * @return string
     */
    public function getKryt1p()
    {
        return $this->kryt1p;
    }

    /**
     * Set kryt2
     *
     * @param string $kryt2
     *
     * @return PrzetargiCz
     */
    public function setKryt2($kryt2)
    {
        $this->kryt2 = $kryt2;

        return $this;
    }

    /**
     * Get kryt2
     *
     * @return string
     */
    public function getKryt2()
    {
        return $this->kryt2;
    }

    /**
     * Set kryt2p
     *
     * @param string $kryt2p
     *
     * @return PrzetargiCz
     */
    public function setKryt2p($kryt2p)
    {
        $this->kryt2p = $kryt2p;

        return $this;
    }

    /**
     * Get kryt2p
     *
     * @return string
     */
    public function getKryt2p()
    {
        return $this->kryt2p;
    }

    /**
     * Set wartosc
     *
     * @param float $wartosc
     *
     * @return PrzetargiCz
     */
    public function setWartosc($wartosc)
    {
        $this->wartosc = $wartosc;

        return $this;
    }

    /**
     * Get wartosc
     *
     * @return float
     */
    public function getWartosc()
    {
        return $this->wartosc;
    }

    /**
     * Set szacunkowaWartoscZamowieniaCalkowita
     *
     * @param float $szacunkowaWartoscZamowieniaCalkowita
     *
     * @return PrzetargiCz
     */
    public function setSzacunkowaWartoscZamowieniaCalkowita($szacunkowaWartoscZamowieniaCalkowita)
    {
        $this->szacunkowaWartoscZamowieniaCalkowita = $szacunkowaWartoscZamowieniaCalkowita;

        return $this;
    }

    /**
     * Get szacunkowaWartoscZamowieniaCalkowita
     *
     * @return float
     */
    public function getSzacunkowaWartoscZamowieniaCalkowita()
    {
        return $this->szacunkowaWartoscZamowieniaCalkowita;
    }

    /**
     * Set wartoscProcentowaCzesciZamowienia
     *
     * @param float $wartoscProcentowaCzesciZamowienia
     *
     * @return PrzetargiCz
     */
    public function setWartoscProcentowaCzesciZamowienia($wartoscProcentowaCzesciZamowienia)
    {
        $this->wartoscProcentowaCzesciZamowienia = $wartoscProcentowaCzesciZamowienia;

        return $this;
    }

    /**
     * Get wartoscProcentowaCzesciZamowienia
     *
     * @return float
     */
    public function getWartoscProcentowaCzesciZamowienia()
    {
        return $this->wartoscProcentowaCzesciZamowienia;
    }

    /**
     * Set cena
     *
     * @param float $cena
     *
     * @return PrzetargiCz
     */
    public function setCena($cena)
    {
        $this->cena = $cena;

        return $this;
    }

    /**
     * Get cena
     *
     * @return float
     */
    public function getCena()
    {
        return $this->cena;
    }

    /**
     * Set cenaMin
     *
     * @param float $cenaMin
     *
     * @return PrzetargiCz
     */
    public function setCenaMin($cenaMin)
    {
        $this->cenaMin = $cenaMin;

        return $this;
    }

    /**
     * Get cenaMin
     *
     * @return float
     */
    public function getCenaMin()
    {
        return $this->cenaMin;
    }

    /**
     * Set cenaMax
     *
     * @param float $cenaMax
     *
     * @return PrzetargiCz
     */
    public function setCenaMax($cenaMax)
    {
        $this->cenaMax = $cenaMax;

        return $this;
    }

    /**
     * Get cenaMax
     *
     * @return float
     */
    public function getCenaMax()
    {
        return $this->cenaMax;
    }

    /**
     * Set waluta
     *
     * @param string $waluta
     *
     * @return PrzetargiCz
     */
    public function setWaluta($waluta)
    {
        $this->waluta = $waluta;

        return $this;
    }

    /**
     * Get waluta
     *
     * @return string
     */
    public function getWaluta()
    {
        return $this->waluta;
    }

    /**
     * Set miejsce
     *
     * @param string $miejsce
     *
     * @return PrzetargiCz
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
     * Set adres
     *
     * @param string $adres
     *
     * @return PrzetargiCz
     */
    public function setAdres($adres)
    {
        $this->adres = $adres;

        return $this;
    }

    /**
     * Get adres
     *
     * @return string
     */
    public function getAdres()
    {
        return $this->adres;
    }

    /**
     * Set miejscowosc
     *
     * @param string $miejscowosc
     *
     * @return PrzetargiCz
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
     * @return PrzetargiCz
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
     * @return PrzetargiCz
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
