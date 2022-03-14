<?php 
namespace mario\eskaerak;

class eskaera
{
    private $eskaera_id;
    private $produktua_id;
    private $eskari_data;
    private $produktu_izena;
    private $kantitatea;
    private $prezio_totala;
    private $bezero_nan;

    public function __construct()
    {

    }
    public function setEskaera_id($eskaera_id)
    {
        $this->eskaera_id = $eskaera_id;
    }

    public function getEskaera_id()
    {
        return $this->eskaera_id;
    }

    public function setProduktua_id($produktua_id)
    {
        $this->produktua_id = $produktua_id;
    }
    public function getProduktua_id()
    {
        return $this->produktua_id;
    }

    public function setEskari_data($eskari_data)
    {
        $this->eskari_data = $eskari_data;
    }
    public function getEskari_data()
    {
        return $this->eskari_data;
    }

    public function setProduktu_izena($produktu_izena)
    {
        $this->produktu_izena = $produktu_izena;
    }
    public function getProduktu_izena()
    {
        return $this->produktu_izena;
    }

    public function setKantitatea($kantitatea)
    {
        $this->kantitatea = $kantitatea;
    }
    public function getKantitatea()
    {
        return $this->kantitatea;
    }

    public function setPrezio_totala($prezio_totala)
    {
        $this->prezio_totala = $prezio_totala;
    }
    public function getPrezio_totala()
    {
        return $this->prezio_totala;
    }
    public function setBezero_nan($bezero_nan)
    {
        $this->bezero_nan = $bezero_nan;
    }
    public function getBezero_nan()
    {
        return $this->bezero_nan;
    }
}
?>