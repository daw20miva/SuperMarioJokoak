<?php

namespace com\leartik\mario_bros\denda;

class Saskia
{
	private $detaileak;

	public function __construct()
	{
		$this->detaileak = array();
	}

	public function setDetaileak($detaileak)
	{
		$this->detaileak = $detaileak;
	}

	public function getDetaileak()
	{
		return $this->detaileak;
	}

	public function detaileaGehitu($detailea)
	{
		$id = $detailea->getProduktua()->getId();
        $kopurua = $detailea->getKopurua();
			
		foreach ($this->detaileak as $d) {

	        if ($d->getProduktua()->getId() == $id)
			{
		        $d->setKopurua($kopurua);
		        return;
			}
		}

		$this->detaileak[] = $detailea;
	}

	public function detaileaEzabatu($detailea)
	{
		$id = $detailea->getProduktua()->getId();
			
		for ($i=0;$i<count($this->detaileak);$i++) {

	        if ($this->detaileak[$i]->getProduktua()->getId() == $id)
			{
				unset($this->detaileak[$i]);
				$this->detaileak = array_values($this->detaileak);
		        return;
			}
		}
	
	}

	public function getDetaileKopurua()
	{
		return count($this->detaileak);
	}
}

?>


