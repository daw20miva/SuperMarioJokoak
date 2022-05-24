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

require('../../klaseak/mario.eskariak.eskaria.php');
require('../../klaseak/mario.eskariak.eskaria_db.php');
require('../../klaseak/mario.detaileak.detailea.php');
require('../../klaseak/mario.detaileak.detailea_db.php');
use mario\eskariak\Mario_brosDB;
use mario\eskariak\Mario_bros;
use mario\detaileak\Detailea;
use mario\detaileak\DetaileaDB;
    
            if (isset($_POST['gorde'])) {
               
                $id = filter_input(INPUT_POST, 'id',FILTER_VALIDATE_INT);//hau gehitu dut ez dakit bertan egon behar den eta hurengo lerroan ere
                $izena = filter_input(INPUT_POST, 'izena');
                $abizena = filter_input(INPUT_POST, 'abizena');
                $emaila = filter_input(INPUT_POST, 'emaila');
                $herria = filter_input(INPUT_POST, 'herria');
                $helbidea = filter_input(INPUT_POST, 'helbidea');
                $probintzia = filter_input(INPUT_POST, 'probintzia');
                $Pk = filter_input(INPUT_POST, 'Pk',FILTER_VALIDATE_INT);
              //  $telefonoa = filter_input(INPUT_POST, 'telefonoa',FILTER_VALIDATE_FLOAT);//FILTER_VALIDATE PARA NUMEROS
    
                    
                if( $izena != null && $abizena != null && $emaila != null && $herria != null && $helbidea != null && $probintzia != null){    
                
                
                
                $izena = strip_tags($izena);
                $abizena = strip_tags($abizena);//Si tuviese un editor esto quitaria las etiquetas "p". Esto quita todas las etiquetas
                $emaila = strip_tags($emaila);//urtea ez dugu garbitu behar eta prezioari ere ez
                $herria = strip_tags($herria);
                $probintzia = strip_tags($probintzia);
                $helbidea = strip_tags($helbidea);
                


                $eskaria= new Mario_bros();
                $eskaria->setId($id);
                $eskaria->setIzena($izena);
                $eskaria->setAbizena($abizena);
                $eskaria->setEmaila($emaila);
                $eskaria->setHerria($herria);
                $eskaria->setHelbidea($helbidea);
                $eskaria->setPk($Pk);
                $eskaria->setProbintzia($probintzia);

                //$detaileak = $eskaria->getDetaileak();
		
                $detailea = new Detailea();
            
                $detailea->setId($id);
                $detailea->setId_eskaria($id_eskaria);
                $detailea->setId_produktua($id_produktua);
                $detailea->setKopurua($kopurua);
                $detailea->setPrezioa($prezioa);
        

                //$eskaria->setTelefonoa($telefonoa);

                if (Mario_brosDB::updateEskaria($eskaria) > 0) {
                    include('eskaria_gorde_da.php');

                }else {
                    include('eskaria_ez_da_gorde.php');
                }
            }else{
                if($izena == false ){
                    $mezua =" Datuak ez dira zuzenak";
                }else{
                $mezua ="Eremu guztiak bete behar dira";
                }
                include('eskaria_aldatu.php');
            }
        } else {

            $id = filter_input(INPUT_GET, "id", FILTER_VALIDATE_INT);
            if($id !== false && $id !== null){

                $eskaria= Mario_brosDB::selectEskaria($id);
              
            if($eskaria != null ){

                $mezua = "";
                $id =$eskaria->getId();
                $izena = $eskaria->getIzena();
                $abizena = $eskaria->getAbizena();
                $emaila = $eskaria->getEmaila();
                $helbidea =$eskaria->getHelbidea();
                $Pk =$eskaria->getPk();
                $probintzia =$eskaria->getProbintzia();
                $herria =$eskaria->getHerria();
               
               // $telefonoa = $eskaria->getTelefonoa();
               include('eskaria_aldatu.php');

        
        }else{
            include('eskaria_id_baliogabea.php');
        }

    } else {
       
        include('eskaria_id_baliogabea.php');
    }
} ?>