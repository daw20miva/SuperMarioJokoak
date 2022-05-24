<?php

namespace com\leartik\mario_bros\denda;

class Detailea
{
	private $id;
	private $produktua;
	private $kopurua;

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

	public function setProduktua($produktua)
	{
		$this->produktua = $produktua;
	}

	public function getProduktua()
	{
		return $this->produktua;
	}

	public function setKopurua($kopurua)
	{
		$this->kopurua = $kopurua;
	}

	public function getKopurua()
	{
		return $this->kopurua;
	}

	public function getGuztira()
	{
		return $this->produktua->getPrezioa() * $this->kopurua;
	}
}

?>


