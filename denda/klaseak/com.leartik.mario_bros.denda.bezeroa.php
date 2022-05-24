<?php

namespace com\leartik\mario_bros\denda;

class Bezeroa
{
	private $id;
	private $izena;
	private $abizena;
	private $helbidea;
	private $probintzia;
	private $pk;
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

	public function setPK($pk)
	{
		$this->pk = $pk;
	}

	public function getPK()
	{
		return $this->pk;
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
}

?>


