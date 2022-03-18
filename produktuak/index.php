<?php 
require_once('klaseak/mario.produktuak.produktua.php');
require_once('klaseak/mario.produktuak.produktua_db.php');
use  mario\produktuak\Mario_brosDB;


if (isset($_GET['id'])) {

    $id = filter_input(INPUT_GET, "id", FILTER_VALIDATE_INT);

    if($id !== false) {

    $produktua = Mario_brosDB::selectProduktua($id);

    if ($produktua != null) {
    include('produktua_erakutsi.php');
    } else {
        include('produktu_id_baliogabea.php');
    }
} else {

    include('produktu_id_baliogabea.php');
}
}else{
    $produktuak = Mario_brosDB::selectProduktuak();
    include('produktuak_erakutsi.php');
} ?>