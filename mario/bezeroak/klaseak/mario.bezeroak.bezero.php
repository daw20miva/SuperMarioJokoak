<?php 
namespace mario\bezeroak;

class bezero
{
    private $nan;
    private $izena;
    private $abizena;
    private $emaila;
    private $telefonoa;
    private $helbidea;
    private $kode_postea;
    private $probintzia;
    private $herrialdea;

    public function __construct()
    {

    }
    public function setNan($nan)
    {
        $this->nan = $nan;
    }

    public function getNan()
    {
        return $this->nan;
    }

    public function setIzena($izena)
    {
        $this->izena = $izena;
    }
    public function getIzena()
    {
        return $this->izena;
    }
    public function setAbizena($abizena)
    {
        $this->abizena = $abizena;
    }
    public function getAbizena()
    {
        return $this->abizena;
    }

    public function setEmaila($emaila)
    {
        $this->emaila = $emaila;
    }
    public function getEmaila()
    {
        return $this->emaila;
    }

    public function setTelefonoa($telefonoa)
    {
        $this->telefonoa = $telefonoa;
    }
    public function getTelefonoa()
    {
        return $this->telefonoa;
    }
    public function setHelbidea($helbidea)
    {
        $this->helbidea = $helbidea;
    }
    public function getHelbidea()
    {
        return $this->helbidea;
    }

    public function setKode_postea($kode_postea)
    {
        $this->kode_postea = $kode_postea;
    }
    public function getKode_postea()
    {
        return $this->kode_postea;
    }

    public function setProbintzia($probintzia)
    {
        $this->probintzia = $probintzia;
    }
    public function getProbintzia()
    {
        return $this->probintzia;
    }

    public function setHerrialdea($herrialdea)
    {
        $this->herrialdea = $herrialdea;
    }
    public function getHerrialdea()
    {
        return $this->herrialdea;
    }
}
?>