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

require('../../klaseak/mario.stockak.stock.php');
require('../../klaseak/mario.stockak.stock_db.php');
use mario\stockak\Mario_brosDB;
use mario\stockak\Stock;
    
            if (isset($_POST['gorde'])) {
                //$id = $_POST['id'];
                //$produktu_izena = $_POST['produktu_izena'];
               // $prezioa = $_POST['prezioa'];
                //$xehetasunak = $_POST['xehetasunak'];
                //$prezioa = $_POST['prezioa'];

                //if (strlen($id) > 0 && strlen($produktu_izena) > 0 && strlen($prezioa) > 0 && strlen($xehetasunak)> 0 && strlen($prezioa)){
                $produktua_id = filter_input(INPUT_POST, 'produktua_id',FILTER_VALIDATE_INT);//hau gehitu dut ez dakit bertan egon behar den eta hurengo lerroan ere
                $kopurua = filter_input(INPUT_POST, 'kopurua',FILTER_VALIDATE_INT);
               
                    
                if($produktua_id != null && $produktua_id != false && $kopurua != null && $kopurua != false){    
                
                
                
                
                
                $stock= new Stock();
                $stock->setProduktua_id($produktua_id);
                $stock->setKopurua($kopurua);
            
              

                if (Mario_brosDB::updateStock($stock) > 0) {
                    include('stock_gorde_da.php');

                }else {
                    include('stock_ez_da_gorde.php');
                }
            }else{
                if($prezioa == false ){
                    $mezua =" Datuak ez dira zuzenak";
                }else{
                $mezua ="Eremu guztiak bete behar dira";
                }
                include('stock_aldatu.php');
            }
        } else {

            $produktua_id = filter_input(INPUT_GET, "produktua_id", FILTER_VALIDATE_INT);
            if($produktua_id !== false && $produktua_id !== null){

                $stock= Mario_brosDB::selectStock($produktua_id);
            
            if($stock != null){

                $mezua = "";
                $produktua_id =$stock->getProduktua_id();
                $kopurua = $stock->getKopurua();
                
               include('stock_aldatu.php');

        
        }else{
            include('stock_id_baliogabea.php');
        }

    } else {
       
        include('stock_id_baliogabea.php');
    }
} ?>