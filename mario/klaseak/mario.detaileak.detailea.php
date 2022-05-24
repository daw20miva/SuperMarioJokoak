<?php 
namespace mario\detaileak;

class Detailea
{
    private $id;
    private $id_eskaria;
    private $id_produktua;
    private $kopurua;
    private $prezioa;
   

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

    public function setId_eskaria($id_eskaria)
    {
        $this->id_eskaria = $id_eskaria;
    }
    public function getId_eskaria()
    {
        return $this->id_eskaria;
    }


    public function setId_produktua($id_produktua)
    {
        $this->id_produktua = $id_produktua;
    }
    public function getId_produktua()
    {
        return $this->id_produktua;
    }

    /*public function setNan($nan)
    {
        $this->nan = $nan;
    }
    public function getNan()
    {
        return $this->nan;
    }*/

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
   

  /*  public function setPrezio_totala($prezio_totala)
    {
        $this->prezio_totala = $prezio_totala;
    }
    public function getPrezio_totala()
    {
        return $this->prezio_totala;
    }
   */
}
?>