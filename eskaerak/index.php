<?php 
require_once('../klaseak/mario.eskaerak.eskaera.php');
require_once('../klaseak/mario.eskaerak.eskaera_db.php');
use  mario\eskaerak\Mario_brosDB;


if (isset($_GET['eskaera_id'])) {

    $eskaera_id = filter_input(INPUT_GET, "eskaera_id", FILTER_VALIDATE_INT);

    if($eskaera_id !== false) {

    $eskaera = Mario_brosDB::selectEskaera($eskaera_id);

    if ($eskaera != null) {
    include('eskaera_erakutsi.php');
    } else {
        include('eskaera_id_baliogabea.php');
    }
} else {

    include('eskaera_id_baliogabea.php');
}
}else{
    $eskaerak = Mario_brosDB::selectEskaerak();
    include('eskaerak_erakutsi.php');
} ?>