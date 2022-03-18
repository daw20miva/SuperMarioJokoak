<?php 
require_once('../klaseak/mario.saskiak.saskia.php');
require_once('../klaseak/mario.saskiak.saskia_db.php');
use  mario\saskiak\Mario_brosDB;


if (isset($_GET['id_saskia'])) {

    $id_saskia = filter_input(INPUT_GET, "id_saskia", FILTER_VALIDATE_INT);

    if($id_saskia !== false) {

    $saskia = Mario_brosDB::selectSaskia($id_saskia);

    if ($saskia != null) {
    include('saskia_erakutsi.php');
    } else {
        include('saskia_id_baliogabea.php');
    }
} else {

    include('saskia_id_baliogabea.php');
}
}else{
    $saskiak = Mario_brosDB::selectSaskiak();
    include('saskiak_erakutsi.php');
} ?>