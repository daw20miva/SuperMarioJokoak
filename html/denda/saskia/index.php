<?php
session_start();
include("../hizkuntzak/" . $_SESSION['hizkuntza'] . ".php");
require('../klaseak/com.leartik.mario_bros.denda.produktua.php');
require('../klaseak/com.leartik.mario_bros.denda.produktua_db.php');
require('../klaseak/com.leartik.mario_bros.denda.detailea.php');
require('../klaseak/com.leartik.mario_bros.denda.detailea_db.php');
require('../klaseak/com.leartik.mario_bros.denda.saskia.php');
use com\leartik\mario_bros\denda\Produktua;
use com\leartik\mario_bros\denda\ProduktuaDB;
use com\leartik\mario_bros\denda\Detailea;
use com\leartik\mario_bros\denda\DetaileaDB;
use com\leartik\mario_bros\denda\Saskia;

if (!isset($_SESSION['saskia'])) {

	$saskia = new Saskia();
	$_SESSION['saskia'] = serialize($saskia);

} else {

	$saskia = unserialize($_SESSION['saskia']);
}

if (isset($_POST['gehitu']) || isset($_POST['eguneratu']) || isset($_POST['ezabatu'])) {

	$id = $_POST['id'];
	$kopurua = $_POST['kopurua'];
	$produktua = ProduktuaDB::selectProduktua($id);
	$detailea = new Detailea();
	$detailea->setProduktua($produktua);
	$detailea->setKopurua($kopurua);
	
	if ($kopurua > 0) {

		$saskia->detaileaGehitu($detailea);

	} else {

		$saskia->detaileaEzabatu($detailea);
	}
	
	$_SESSION['saskia'] = serialize($saskia);
}

include('saskia_erakutsi.php');
