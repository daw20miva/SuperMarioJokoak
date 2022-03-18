<?php 
namespace mario\saskiak;

class Saskia
{
    private $id_saskia;
    private $produktua_id;
    private $produktu_izena; 
    private $nan;
    private $kantitatea;
    private $prezioa;
    private $prezio_totala;
   

    public function __construct()
    {

    }
    public function setId_saskia($id_saskia)
    {
        $this->id_saskia = $id_saskia;
    }

    public function getId_saskia()
    {
        return $this->id_saskia;
    }

    public function setProduktua_id($produktua_id)
    {
        $this->produktua_id = $produktua_id;
    }
    public function getProduktua_id()
    {
        return $this->produktua_id;
    }


    public function setProduktu_izena($produktu_izena)
    {
        $this->produktu_izena = $produktu_izena;
    }
    public function getProduktu_izena()
    {
        return $this->produktu_izena;
    }

    public function setNan($nan)
    {
        $this->nan = $nan;
    }
    public function getNan()
    {
        return $this->nan;
    }

    public function setKantitatea($kantitatea)
    {
        $this->kantitatea = $kantitatea;
    }
    public function getKantitatea()
    {
        return $this->kantitatea;
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