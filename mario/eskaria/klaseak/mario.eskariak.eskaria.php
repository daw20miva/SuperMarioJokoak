<?php 
namespace mario\eskariak;


class Eskaria
{
    private $id;
    private $data;
    private $izena;
    private $abizena;
    private $helbidea;
    private $herria;
    private $Pk;
    private $probintzia;
    private $emaila;
    



    public function __construct()
    {

    }
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }
    public function setData($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
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

    public function setHelbidea($helbidea)
    {
        $this->helbidea = $helbidea;
    }
    public function getHelbidea()
    {
        return $this->helbidea;
    }
    public function setHerria($herria)
    {
        $this->herria = $herria;
    }
    public function getHerria()
    {
        return $this->herria;
    }

    public function setPk($Pk)
    {
        $this->Pk = $Pk;
    }
    public function getPk()
    {
        return $this->Pk;
    }

    public function setProbintzia($probintzia)
    {
        $this->probintzia = $probintzia;
    }
    public function getProbintzia()
    {
        return $this->probintzia;
    }
   
    public function setEmaila($emaila)
    {
        $this->emaila = $emaila;
    }
    public function getEmaila()
    {
        return $this->emaila;
    }
    

    public function setKopurua($kopurua)
    {
        $this->kopurua = $kopurua;
    }
    public function getKopurua()
    {
        return $this->kopurua;
    }
    public function setPrezioa($prezioa)
    {
        $this->prezioa = $prezioa;
    }
    public function getPrezioa()
    {
        return $this->prezioa;
    }
   
    public function setPrezio_totala($prezio_totala)
    {
        $this->prezio_totala = $prezio_totala;
    }
    public function getPrezio_totala()
    {
        return $this->prezio_totala;
    }
}
?>