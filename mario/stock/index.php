<?php 
require_once('../klaseak/mario.stockak.stock.php');
require_once('../klaseak/mario.stockak.stock_db.php');
use  mario\stockak\Mario_brosDB;


if (isset($_GET['produktua_id'])) {

    $produktua_id = filter_input(INPUT_GET, "produktua_id", FILTER_VALIDATE_INT);

    if($produktua_id !== false) {

    $stock = Mario_brosDB::selectStock($produktua_id);

    if ($stock != null) {
    include('stock_erakutsi.php');
    } else {
        include('stock_id_baliogabea.php');
    }
} else {

    include('stock_id_baliogabea.php');
}
}else{
    $stockak = Mario_brosDB::selectStockak();
    include('stockak_erakutsi.php');
} ?>