<?php 
namespace mario\stockak;

class stock
{
    private $produktua_id;
    private $kopurua;

    public function __construct()
    {

    }
    public function setProduktua_id($produktua_id)
    {
        $this->produktua_id = $produktua_id;
    }

    public function getProduktua_id()
    {
        return $this->produktua_id;
    }

    public function setKopurua($kopurua)
    {
        $this->kopurua = $kopurua;
    }
    public function getKopurua()
    {
        return $this->kopurua;
    }
    
}
?>