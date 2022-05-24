<?php

namespace com\leartik\mario_bros\denda;

class Produktua
{
	private $id;
	private $izenburua;
	private $xehetasunak;
	private $deskribapena;
	private $detalles;
	private $descripcion;
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

	public function setIzenburua($izenburua)
	{
		$this->izenburua = $izenburua;
	}

	public function getIzenburua()
	{
		return $this->izenburua;
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
		$this->detalles = $destalles;
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

	public function setPrezioa($prezioa)
	{
		$this->prezioa = $prezioa;
	}

	public function getPrezioa()
	{
		return $this->prezioa;
	}
}

?>


