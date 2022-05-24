<?php
session_start();
require('klaseak/com.leartik.mario_bros.denda.produktua.php');
require('klaseak/com.leartik.mario_bros.denda.produktua_db.php');
use com\leartik\mario_bros\denda\Produktua;
use com\leartik\mario_bros\denda\ProduktuaDB;

if (isset($_GET['hizkuntza'])) {

	if ($_GET['hizkuntza'] == "euskera" || $_GET['hizkuntza'] == "erdera") {

		$hizkuntza = $_GET['hizkuntza'];

	} else {

		$hizkuntza = "euskera";
	}

	$_SESSION['hizkuntza'] = $hizkuntza;

} else if (!isset($_SESSION['hizkuntza'])) {

	$hizkuntza = "euskera";
	$_SESSION['hizkuntza'] = $hizkuntza;

} else {

	$hizkuntza = $_SESSION['hizkuntza'];
}

include("hizkuntzak/" . $_SESSION['hizkuntza'] . ".php");

if (isset($_GET['id'])) {

	$id = filter_input(INPUT_GET, "id", FILTER_VALIDATE_INT);
	
	if ($id !== false) {

		$produktua = ProduktuaDB::selectProduktua($id);
		
		if ($produktua != null) {
			
			include('produktua_erakutsi.php');
		
		} else {
			
			include('produktua_id_baliogabea.php');
		}
	
	} else {

		include('produktua_id_baliogabea.php');
	}

} else {

	$produktuak = ProduktuaDB::selectProduktuak();

	include('produktuak_erakutsi.php');
}

?>
