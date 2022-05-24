
<?php 

require_once('../klaseak/mario.detaileak.detailea.php');
require_once('../klaseak/mario.detaileak.detailea_db.php');
use  mario\detaileak\Mario_brosDB;


if (isset($_GET['id'])) {

    $id = filter_input(INPUT_GET, "id", FILTER_VALIDATE_INT);

    if($id !== false) {

    $detailea = Mario_brosDB::selectDetailea($id);

    if ($detailea != null) {
    include('detailea_erakutsi.php');
    } else {
        include('detailea_id_baliogabea.php');
    }
} else {

    include('detailea_id_baliogabea.php');
}
}else{
    $detaileak = Mario_brosDB::selectDetaileak();
    include('detaileak_erakutsi.php');
} ?>