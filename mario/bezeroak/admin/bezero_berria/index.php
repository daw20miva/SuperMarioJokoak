<?php 
require('../../klaseak/bezeroak.bezero.php');
require('../../klaseak/bezeroak.bezero_db.php');
use bezeroak\Bezero;
use bezeroak\Mario_brosDB;

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
               
                $nan = filter_input(INPUT_POST, 'nan');
                $izena = filter_input(INPUT_POST, 'izena');
                $abizena = filter_input(INPUT_POST, 'abizena');
                $emaila = filter_input(INPUT_POST, 'emaila');
                $telefonoa = filter_input(INPUT_POST, 'telefonoa', FILTER_VALIDATE_FLOAT);//FILTER_VALIDATE PARA NUMEROS
                $helbidea = filter_input(INPUT_POST, 'helbidea');
                $kode_postea = filter_input(INPUT_POST, 'kode_postea');
                $probintzia = filter_input(INPUT_POST, 'probintzia');
                $herrialdea = filter_input(INPUT_POST, 'herrialdea');
            
                if($nan != null && $izena != null && $abizena != null && $emaila != null && $telefonoa = null && $helbidea != null && $kode_postea !=null  &&  $probintzia != null && $herrialdea != false){//karaktere kate hutsa eta null bardiña dira php-en
                
               
               
                $izena = strip_tags($izena);
                $abizena = strip_tags($abizena);//Si tuviese un editor esto quitaria las etiquetas "p". Esto quita todas las etiquetas
                $emaila = strip_tags($emaila);//urtea ez dugu garbitu behar eta prezioari ere ez


                $bezero = new Bezero();
                $bezero->setNan($nan);
                $bezero->setIzena($izena);
                $bezero->setAbizena($abizena);
                $bezero->setEmaila($emaila);
                $bezero->setTelefonoa($telefonoa);
                $bezero->setHelbidea($helbidea);
                $bezero->setKode_postea($kode_postea);
                $bezero->setProbintzia($probintzia);
                $bezero->setHerrialdea($herrialdea);

                if (Mario_brosDB::insertBezero($bezero) > 0) {
                    include('bezero_gorde_da.php');

                }else {
                    include('bezero_ez_da_gorde.php');
                }
            }else{
                if($telefonoa == false ){

                    $mezua ="Datuak ez dira zuzenak";
                }else{
                $mezua ="Eremu guztiak bete behar dira";
                }
                include('bezero_berria.php');
            }
             }else{
                 $nan = "";
                $izena = "";
                $abizena = "";
                $emaila = "";
                $telefonoa = "";
                $helbidea = "";
                $kode_postea = "";
                $probintzia = "";
                $herrialdea = "";
                $mezua = "";
                include('tour_berria.php');

            }
        }else{
            header("location: ../index.php");
    } ?>