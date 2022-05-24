<?php 
require_once('../klaseak/mario.eskariak.eskaria.php');
require_once('../klaseak/mario.eskariak.eskaria_db.php');
use  mario\eskariak\Mario_brosDB;


if (isset($_GET['id'])) {

    $id = filter_input(INPUT_GET, "id", FILTER_VALIDATE_INT);

    if($id !== false) {

    $eskaria = Mario_brosDB::selectEskaria($id);

    if ($eskaria != null) {
    include('eskaria_erakutsi.php');
    } else {
        include('eskaria_id_baliogabea.php');
    }
} else {

    include('eskaria_id_baliogabea.php');
}
}else{
    $eskariak = Mario_brosDB::selectEskariak();
    include('eskariak_erakutsi.php');
} ?>