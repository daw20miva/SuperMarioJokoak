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

require('../../klaseak/mario.eskaerak.eskaera.php');
require('../../klaseak/mario.eskaerak.eskaera_db.php');
use mario\eskaerak\Mario_brosDB;
use mario\eskaerak\Eskaera;
    
            if (isset($_POST['gorde'])) {
               
                $eskaera_id = filter_input(INPUT_POST, 'eskaera_id',FILTER_VALIDATE_INT);//hau gehitu dut ez dakit bertan egon behar den eta hurengo lerroan ere
                $produktua_id = filter_input(INPUT_POST, 'produktua_id',FILTER_VALIDATE_INT);
                $eskari_data = filter_input(INPUT_POST, 'eskari_data');
                $produktu_izena = filter_input(INPUT_POST, 'produktu_izena');
                $kantitatea = filter_input(INPUT_POST, 'kantitatea',FILTER_VALIDATE_INT);//FILTER_VALIDATE PARA NUMEROS
                $prezio_totala = filter_input(INPUT_POST, 'prezio_totala',FILTER_VALIDATE_FLOAT);//FILTER_VALIDATE PARA NUMEROS
                $bezero_nan = filter_input(INPUT_POST, 'bezero_nan');//FILTER_VALIDATE PARA NUMEROS
                    
                if($eskaera_id != null && $eskaera_id != false && $produktua_id != null  && $produktua_id != false && $eskari_data != null && $produktu_izena != null && $kantitatea != null && $kantitatea != false && $prezio_totala != null && $prezio_totala != false && $bezero_nan != null){    
                
                        
               // $produktua_id = strip_tags($produktua_id);
                $eskari_data = strip_tags($eskari_data);//Si tuviese un editor esto quitaria las etiquetas "p". Esto quita todas las etiquetas
                $produktu_izena = strip_tags($produktu_izena);//urtea ez dugu garbitu behar eta prezioari ere ez
                $bezero_nan = strip_tags($bezero_nan);


                $eskaera= new Eskaera();
                $eskaera->setEskaera_id($eskaera_id);
                $eskaera->setProduktua_id($produktua_id);
                $eskaera->setEskari_data($eskari_data);
                $eskaera->setProduktu_izena($produktu_izena);
                $eskaera->setKantitatea($kantitatea);
                $eskaera->setPrezio_totala($prezio_totala);
                $eskaera->setBezero_nan($bezero_nan);

                if (Mario_brosDB::updateEskaera($eskaera_id,$produktua_id,$eskari_data,$produktu_izena,$kantitatea,$prezio_totala,$bezero_nan) > 0) {
                    include('eskaera_gorde_da.php');

                }else {
                    include('eskaera_ez_da_gorde.php');
                }
            }else{
                if($kantitatea == false ){
                    $mezua =" Datuak ez dira zuzenak";
                }else{
                $mezua ="Eremu guztiak bete behar dira";
                }
                include('eskaera_aldatu.php');
            }
        } else {

            $eskaera_id = filter_input(INPUT_GET, "eskaera_id", FILTER_VALIDATE_INT);
            if($eskaera_id !== false && $eskaera_id !== null){

                $eskaera= Mario_brosDB::selectEskaera($eskaera_id);
            
            if($eskaera != null){

                $mezua = "";
                $eskaera_id =$eskaera->getEskaera_id();
                $produktua_id = $eskaera->getProduktua_id();
                $eskari_data = $eskaera->getEskari_data();
                $produktu_izena = $eskaera->getProduktu_izena();
                $kantitatea = $eskaera->getKantitatea();
                $prezio_totala = $eskaera->getPrezio_totala();
                $bezero_nan = $eskaera->getBezero_nan();
               include('eskaera_aldatu.php');

        
        }else{
            include('eskaera_id_baliogabea.php');
        }

    } else {
       
        include('eskaera_id_baliogabea.php');
    }
} ?>