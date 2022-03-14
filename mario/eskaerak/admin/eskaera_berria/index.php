<?php 
require('../../klaseak/eskaerak.eskaera.php');
require('../../klaseak/eskaerak.eskaera_db.php');
use \eskaerak\Eskaera;
use \eskaerak\Mario_brosDB;

        //albisteen adminiztrazioa baimenduta dagoen ala ez jakiteko indikadorea
       // 
        if(isset($_COOKIE['erabiltzailea']) && $_COOKIE['erabiltzailea'] == "mario"){
            $admin=true;
        } else{
            $admin = false;

        }

        //administrazioa baimenduta bada albisteen zerrenda erakutsi, bestela hasierako formularioa
        if($admin == true){
            if (isset($_POST['gorde'])) {
               
                $eskaera_id = filter_input(INPUT_POST, 'eskaera_id');
                $produktua_id = filter_input(INPUT_POST, 'produktua_id');
                $eskari_data = filter_input(INPUT_POST, 'eskari_data');
                $produktu_izena = filter_input(INPUT_POST, 'produktu_izena');
                $kantitatea = filter_input(INPUT_POST, 'kantitatea', FILTER_VALIDATE_FLOAT);//FILTER_VALIDATE PARA NUMEROS
                $prezio_totala = filter_input(INPUT_POST, 'prezio_totala');
                $bezero_nan = filter_input(INPUT_POST, 'bezero_nan');
                
            
                if($eskaera_id != null && $produktua_id != null && $eskari_data != null && $produktu_izena != null && $kantitatea = null && $prezio_totala != null && $bezero_nan !=null ){//karaktere kate hutsa eta null bardiña dira php-en
                
               
               
                $produktua_id = strip_tags($produktua_id);
                $eskari_data = strip_tags($eskari_data);//Si tuviese un editor esto quitaria las etiquetas "p". Esto quita todas las etiquetas
                $produktu_izena = strip_tags($produktu_izena);//urtea ez dugu garbitu behar eta prezioari ere ez


                $eskaera = new Eskaera();
                $eskaera->setEskaera_id($eskaera_id);
                $eskaera->setProduktua_id($produktua_id);
                $eskaera->setEskari_data($eskari_data);
                $eskaera->setProduktu_izena($produktu_izena);
                $eskaera->setKantitatea($kantitatea);
                $eskaera->setPrezio_totala($prezio_totala);
                $eskaera->setBezero_nana($bezero_nan);
                

                if (Mario_brosDB::insertEskaera($eskaera) > 0) {
                    include('eskaera_gorde_da.php');

                }else {
                    include('eskaera_ez_da_gorde.php');
                }
            }else{
                if($kantitatea == false ){

                    $mezua ="Datuak ez dira zuzenak";
                }else{
                $mezua ="Eremu guztiak bete behar dira";
                }
                include('eskaera_berria.php');
            }
             }else{
                 $eskaera_id = "";
                $produktua_id = "";
                $eskari_data = "";
                $produktu_izena = "";
                $kantitatea = "";
                $prezio_totala = "";
                $bezero_nan = "";
              
                $mezua = "";
                include('tour_berria.php');

            }
        }else{
            header("location: ../index.php");
    } ?>