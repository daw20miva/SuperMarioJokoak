<?php 
require_once('../klaseak/mario.bezeroak.bezero.php');
require_once('../klaseak/mario.bezeroak.bezero_db.php');
use  mario\bezeroak\Mario_brosDB;


if (isset($_GET['id'])) {

    $id = filter_input(INPUT_GET, "id", FILTER_VALIDATE_INT);

    if($id !== false) {

    $bezero = Mario_brosDB::selectBezero($id);

    if ($bezero != null) {
    include('bezero_erakutsi.php');
    } else {
        include('bezero_id_baliogabea.php');
    }
} else {

    include('bezero_id_baliogabea.php');
}
}else{
    $bezeroak = Mario_brosDB::selectBezeroak();
    include('bezeroak_erakutsi.php');
} ?>