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

require('../../klaseak/bezeroak.bezero.php');
require('../../klaseak/bezeroak.bezero_db.php');
use \bezeroak\Mario_brosDB;
use \bezeroak\Mario_bros;
    
            if (isset($_POST['gorde'])) {
               
                $nan = filter_input(INPUT_POST, 'nan',FILTER_VALIDATE_INT);//hau gehitu dut ez dakit bertan egon behar den eta hurengo lerroan ere
                $izena = filter_input(INPUT_POST, 'izena');
                $abizena = filter_input(INPUT_POST, 'abizena');
                $emaila = filter_input(INPUT_POST, 'emaila');
                $telefonoa = filter_input(INPUT_POST, 'telefonoa',FILTER_VALIDATE_FLOAT);//FILTER_VALIDATE PARA NUMEROS
    
                    
                if($nan != null && $nan != false && $izena != null && $abizena != null && $emaila != null && $telefonoa != null && $telefonoa != false){    
                
                
                
                $izena = strip_tags($izena);
                $abizena = strip_tags($abizena);//Si tuviese un editor esto quitaria las etiquetas "p". Esto quita todas las etiquetas
                $emaila = strip_tags($emaila);//urtea ez dugu garbitu behar eta prezioari ere ez
                
                $bezero= new Mario_bros();
                $bezero->setNan($nan);
                $bezero->setIzena($izena);
                $bezero->setAbizena($abizena);
                $bezero->setEmaila($emaila);
                $bezero->setTelefonoa($telefonoa);

                if (Mario_brosDB::updateBezero($bezero) > 0) {
                    include('bezero_gorde_da.php');

                }else {
                    include('bezero_ez_da_gorde.php');
                }
            }else{
                if($telefonoa == false ){
                    $mezua =" Datuak ez dira zuzenak";
                }else{
                $mezua ="Eremu guztiak bete behar dira";
                }
                include('bezero_aldatu.php');
            }
        } else {

            $nan = filter_input(INPUT_GET, "nan", FILTER_VALIDATE_INT);
            if($nan !== false && $nan !== null){

                $bezero= Mario_brosDB::selectBezero($nan);
            
            if($bezero != null){

                $mezua = "";
                $nan =$bezero->getNan();
                $izena = $bezero->getIzena();
                $abizena = $bezero->getAbizena();
                $emaila = $bezero->getEmaila();
                $telefonoa = $bezero->getTelefonoa();
               include('bezero_aldatu.php');

        
        }else{
            include('bezero_id_baliogabea.php');
        }

    } else {
       
        include('bezero_id_baliogabea.php');
    }
} ?>