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

require('../../klaseak/mario.saskiak.saskia.php');
require('../../klaseak/mario.saskiak.saskia_db.php');
use mario\saskiak\Mario_brosDB;
use mario\saskiak\Saskia;
    
            if (isset($_POST['gorde'])) {
               
                $id_saskia = filter_input(INPUT_POST, 'id_saskia',FILTER_VALIDATE_INT);//hau gehitu dut ez dakit bertan egon behar den eta hurengo lerroan ere
                $produktua_id = filter_input(INPUT_POST, 'produktua_id',FILTER_VALIDATE_INT);
                $produktu_izena = filter_input(INPUT_POST, 'produktu_izena');
                $nan = filter_input(INPUT_POST, 'nan');//FILTER_VALIDATE PARA NUMEROS
                $kantitatea = filter_input(INPUT_POST, 'kantitatea',FILTER_VALIDATE_INT);//FILTER_VALIDATE PARA NUMEROS
                $prezioa = filter_input(INPUT_POST, 'prezioa',FILTER_VALIDATE_FLOAT);//FILTER_VALIDATE PARA NUMEROS
                $prezio_totala = filter_input(INPUT_POST, 'prezio_totala',FILTER_VALIDATE_FLOAT);//FILTER_VALIDATE PARA NUMEROS
               
                    
                if($id_saskia != null && $id_saskia != false && $produktua_id != null  && $produktua_id != false && $produktu_izena != null && nan != null && $kantitatea != null && $kantitatea != false && $prezioa != null && $prezioa != false && $prezio_totala != null && $prezio_totala != false ){    
                
                        
               // $produktua_id = strip_tags($produktua_id);
             
                $produktu_izena = strip_tags($produktu_izena);//urtea ez dugu garbitu behar eta prezioari ere ez
                $nan = strip_tags($nan);


                $saskia= new Saskia();
                $saskia->setId_saskia($id_saskia);
                $saskia->setProduktua_id($produktua_id);
                $saskia->setProduktu_izena($produktu_izena);
                $saskia->setNan($nan);
                $saskia->setKantitatea($kantitatea);
                saskia->setPrezioa($prezioa);
                $saskia->setPrezio_totala($prezio_totala);
                

                if (Mario_brosDB::updateSaskia($id_saskia,$produktua_id,$produktu_izena,$nan,$kantitatea,$prezioa,$prezio_totala) > 0) {
                    include('saskia_gorde_da.php');

                }else {
                    include('saskia_ez_da_gorde.php');
                }
            }else{
                if($kantitatea == false ){
                    $mezua =" Datuak ez dira zuzenak";
                }else{
                $mezua ="Eremu guztiak bete behar dira";
                }
                include('saskia_aldatu.php');
            }
        } else {

            $id_saskia = filter_input(INPUT_GET, "id_saskia", FILTER_VALIDATE_INT);
            if($id_saskia !== false && $id_saskia !== null){

                $saskia= Mario_brosDB::selectSaskia($id_saskia);
            
            if($saskia != null){

                $mezua = "";
                $id_saskia =$saskia->getId_saskia();
                $produktua_id = $saskia->getProduktua_id();
                $produktu_izena = $saskia->getProduktu_izena();
                $nan = $saskia->getNan();
                $kantitatea = $saskia->getKantitatea();
                $prezioa = $saskia->getPrezioa();
                $prezio_totala = $saskia->getPrezio_totala();
               include('saskia_aldatu.php');

        
        }else{
            include('saskia_id_baliogabea.php');
        }

    } else {
       
        include('saskia_id_baliogabea.php');
    }
} ?>