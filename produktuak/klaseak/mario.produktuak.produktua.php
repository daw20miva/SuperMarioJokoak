<?php 
namespace mario\produktuak;

class produktua
{
    private $id;
    private $produktu_izena;
    private $prezioa;
    private $xehetasunak;
    private $deskribapena;
    private $detalles;
    private $descripcion;

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

    public function setProduktu_izena($produktu_izena)
    {
        $this->produktu_izena = $produktu_izena;
    }
    public function getProduktu_izena()
    {
        return $this->produktu_izena;
    }

    public function setPrezioa($prezioa)
    {
        $this->prezioa = $prezioa;
    }
    public function getPrezioa()
    {
        return $this->prezioa;
    }

    public function setXehetasunak($xehetasunak)
    {
        $this->xehetasunak = $xehetasunak;
    }
    public function getXehetasunak()
    {
        return $this->xehetasunak;
    }

    public function setDeskribapena($deskribapena)
    {
        $this->deskribapena = $deskribapena;
    }
    public function getDeskribapena()
    {
        return $this->deskribapena;
    }

    public function setDetalles($detalles)
    {
        $this->detalles = $detalles;
    }
    public function getDetalles()
    {
        return $this->detalles;
    }

    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }
    public function getDescripcion()
    {
        return $this->descripcion;
    }
    
}
?>