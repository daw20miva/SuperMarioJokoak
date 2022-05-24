<?php
namespace com\leartik\mario_bros\denda;
use PDO;

class EskariaDB
{
	public static function insertEskaria($eskaria)
	{
		$db = new PDO("mysql:host=localhost;dbname=mario_bros", "mario_bros", "mario_bros");
		$sql = "insert into eskaria (data,izena,abizena,helbidea,herria,pk,probintzia,emaila) values (";
		$sql = $sql . " '" . $eskaria->getData() . "'";
		$sql = $sql . ",'" . $eskaria->getBezeroa()->getIzena() . "'";
		$sql = $sql . ",'" . $eskaria->getBezeroa()->getAbizena() . "'";
		$sql = $sql . ",'" . $eskaria->getBezeroa()->getHelbidea() . "'";
		$sql = $sql . ",'" . $eskaria->getBezeroa()->getHerria() . "'";
		$sql = $sql . "," . $eskaria->getBezeroa()->getPK();
		$sql = $sql . ",'" . $eskaria->getBezeroa()->getProbintzia() . "'";
		$sql = $sql . ",'" . $eskaria->getBezeroa()->getEmaila() . "')";
		$emaitza = $db->exec($sql);

		if ($emaitza < 1) {

			return $emaitza;

		} else {
			
			$erregistroak = $db->query("select @@identity as identity");

			if ($erregistroa = $erregistroak->fetch()) { 

				foreach ($eskaria->getDetaileak() as $detailea) {

					$sql = "insert into detailea (id_eskaria,id_produktua,prezioa,kopurua) values (";
					$sql = $sql . $erregistroa['identity'];
					$sql = $sql . "," . $detailea->getProduktua()->getId();
					$sql = $sql . "," . $detailea->getProduktua()->getPrezioa();
					$sql = $sql . "," . $detailea->getKopurua() . ")";
					$emaitza = $db->exec($sql);

					if ($emaitza < 1) {
						return $emaitza;
					}
				}
				
				return $emaitza;

			} else {
				
				return 0;
			}
		}
	}
}

?>