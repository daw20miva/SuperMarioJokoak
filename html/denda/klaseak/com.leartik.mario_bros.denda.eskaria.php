<?php

namespace com\leartik\mario_bros\denda;

class Eskaria
{
	private $id;
	private $data;
	private $bezeroa;
	private $detaileak;
	private $bidalita;

	public function __construct()
	{
		$detaileak = array();
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

	public function setBezeroa($bezeroa)
	{
		$this->bezeroa = $bezeroa;
	}

	public function getBezeroa()
	{
		return $this->bezeroa;
	}

	public function setDetaileak($detaileak)
	{
		$this->detaileak = $detaileak;
	}

	public function getDetaileak()
	{
		return $this->detaileak;
	}

	public function setBidalita($bidalita)
	{
		$this->bidalita = $bidalita;
	}

	public function getBidalita()
	{
		return $this->bidalita;
	}
}

?>


