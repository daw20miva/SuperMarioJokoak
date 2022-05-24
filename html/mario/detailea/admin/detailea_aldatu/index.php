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

require('../../klaseak/mario.detaileak.detailea.php');
require('../../klaseak/mario.detaileak.detailea_db.php');
use mario\detaileak\Mario_brosDB;
use mario\detaileak\Detailea;
    
            if (isset($_POST['gorde'])) {
               
                //$id = filter_input(INPUT_POST, 'id',FILTER_VALIDATE_INT);//hau gehitu dut ez dakit bertan egon behar den eta hurengo lerroan ere
                $id_eskaria = filter_input(INPUT_POST, 'id_eskaria',FILTER_VALIDATE_INT);
                $id_produktua = filter_input(INPUT_POST, 'id_produktua');
              //  $nan = filter_input(INPUT_POST, 'nan');//FILTER_VALIDATE PARA NUMEROS
                $kopurua = filter_input(INPUT_POST, 'kopurua',FILTER_VALIDATE_INT);//FILTER_VALIDATE PARA NUMEROS
                $prezioa = filter_input(INPUT_POST, 'prezioa',FILTER_VALIDATE_FLOAT);//FILTER_VALIDATE PARA NUMEROS
              //  $prezio_totala = filter_input(INPUT_POST, 'prezio_totala',FILTER_VALIDATE_FLOAT);//FILTER_VALIDATE PARA NUMEROS
               
                    
                if($id != null && $id != false && $id_eskaria != null  && $id_eskaria != false && $id_produktua != null && $kopurua != null && $kopurua != false && $prezioa != null && $prezioa != false ){    
                
                        
               // $id_eskaria = strip_tags($id_eskaria);
             
                $id_produktua = strip_tags($id_produktua);//urtea ez dugu garbitu behar eta prezioari ere ez
               // $nan = strip_tags($nan);


                $detailea= new Detailea();
                $detailea->setId($id);
                $detailea->setId_eskaria($id_eskaria);
                $detailea->setId_produktua($id_produktua);
               // $detailea->setNan($nan);
                $detailea->setKopurua($kopurua);
                $detailea->setPrezioa($prezioa);
                //$detailea->setPrezio_totala($prezio_totala);
                

                if (Mario_brosDB::updateDetailea($id,$id_eskaria,$id_produktua,$kopurua,$prezioa) > 0) {
                    include('detailea_gorde_da.php');

                }else {
                    include('detailea_ez_da_gorde.php');
                }
            }else{
                if($kopurua == false ){
                    $mezua =" Datuak ez dira zuzenak";
                }else{
                $mezua ="Eremu guztiak bete behar dira";
                }
                include('detailea_aldatu.php');
            }
        } else {

            $id = filter_input(INPUT_GET, "id", FILTER_VALIDATE_INT);
            if($id !== false && $id !== null){

                $detailea= Mario_brosDB::selectDetailea($id);
            
            if($detailea != null){

                $mezua = "";
                $id =$detailea->getId();
                $id_eskaria = $detailea->getId_eskaria();
                $id_produktua = $detailea->getId_produktua();
                //$nan = $detailea->getNan();
                $kopurua = $detailea->getKopurua();
                $prezioa = $detailea->getPrezioa();
               // $prezio_totala = $detailea->getPrezio_totala();
               include('detailea_aldatu.php');

        
        }else{
            include('detailea_id_baliogabea.php');
        }

    } else {
       
        include('detailea_id_baliogabea.php');
    }
} ?>