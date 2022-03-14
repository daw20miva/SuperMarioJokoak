<?php 

//albisteen administrazioa baimenduta dagoen ala ez jakiteko indikadorea
$admin = false;

//erabiltzailea izeneko kookie-a existitzen bada eta bere balioa admina bada, orduan, albisteen kudeaketa baimendu
if (isset($_COOKIE['erabiltzailea']) && $_COOKIE['erabiltzailea'] == "mario"){

	$admin = true;
}

// administrazioa ez bada baimenduta hasierara itzuli
if ($admin == false) {
	header("location: ../index.php");
}

require('../../klaseak/mario.produktuak.produktua.php');
require('../../klaseak/mario.produktuak.produktua_db.php');
use mario\produktuak\Mario_brosDB;
use mario\produktuak\Produktua;
    
            if (isset($_POST['gorde'])) {
                //$id = $_POST['id'];
                //$produktu_izena = $_POST['produktu_izena'];
               // $prezioa = $_POST['prezioa'];
                //$xehetasunak = $_POST['xehetasunak'];
                //$prezioa = $_POST['prezioa'];

                //if (strlen($id) > 0 && strlen($produktu_izena) > 0 && strlen($prezioa) > 0 && strlen($xehetasunak)> 0 && strlen($prezioa)){
                $id = filter_input(INPUT_POST, 'id',FILTER_VALIDATE_INT);//hau gehitu dut ez dakit bertan egon behar den eta hurengo lerroan ere
                $produktu_izena = filter_input(INPUT_POST, 'produktu_izena',FILTER_DEFAULT);
                $prezioa = filter_input(INPUT_POST, 'prezioa',FILTER_VALIDATE_FLOAT);//FILTER_VALIDATE PARA NUMEROS
                $xehetasunak = filter_input(INPUT_POST, 'xehetasunak',FILTER_DEFAULT);
                $deskribapena = filter_input(INPUT_POST, 'deskribapena',FILTER_DEFAULT);
                $detalles = filter_input(INPUT_POST, 'detalles',FILTER_DEFAULT);
                $descripcion = filter_input(INPUT_POST, 'descripcion',FILTER_DEFAULT);
    
                    
                if($id != null  && $produktu_izena != null && $prezioa != null && $xehetasunak != null && $deskribapena != null && $detalles != null && $descripcion != null){    
                
                
                
                $produktu_izena = strip_tags($produktu_izena);//Si tuviese un editor esto quitaria las etiquetas "p". Esto quita todas las etiquetas
                $xehetasunak = strip_tags($xehetasunak);//urtea ez dugu garbitu behar eta prezioari ere ez
                $deskribapena = strip_tags($deskribapena);
                $detalles = strip_tags($detalles);
                $descripcion = strip_tags($descripcion);
                
                $produktua= new Produktua();
                $produktua->setId($id);
                $produktua->setProduktu_izena($produktu_izena);
                $produktua->setPrezioa($prezioa);
                $produktua->setXehetasunak($xehetasunak);
                $produktua->setDeskribapena($deskribapena);
                $produktua->setDetalles($detalles);
                $produktua->setDescripcion($descripcion);

                if (Mario_brosDB::updateProduktua($id,$produktu_izena,$prezioa,$xehetasunak,$deskribapena,$detalles,$descripcion) > 0) {
                    include('produktua_gorde_da.php');

                }else {
                    include('produktua_ez_da_gorde.php');
                }
            }else{
                if($deskribapena == false ){
                    $mezua =" Datuak ez dira zuzenak";
                }else{
                $mezua ="Eremu guztiak bete behar dira";
                }
                include('produktua_aldatu.php');
            }
        } else {

            $id = filter_input(INPUT_GET, "id", FILTER_VALIDATE_INT);
            if($id !== false && $id !== null){

                $produktua= Mario_brosDB::selectProduktua($id);
            
            if($produktua != null){

                $mezua = "";
                $id =$produktua->getId();
                $produktu_izena = $produktua->getProduktu_izena();
                $prezioa = $produktua->getPrezioa();
                $xehetasunak = $produktua->getXehetasunak();
                $deskribapena = $produktua->getDeskribapena();
                $detalles = $produktua->getDetalles();
                $descripcion = $produktua->getDescripcion();
               include('produktua_aldatu.php');

        
        }else{
            include('produktua_id_baliogabea.php');
        }

    } else {
       
        include('produktua_id_baliogabea.php');
    }
} ?>