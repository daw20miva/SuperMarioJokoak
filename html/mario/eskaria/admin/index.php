<?php 
require('../klaseak/mario.eskariak.eskaria.php');
require('../klaseak/mario.eskariak.eskaria_db.php');

use mario\eskariak\Mario_brosDB;

        //albisteen adminiztrazioa baimenduta dagoen ala ez jakiteko indikadorea
        $admin = false;

        if (isset($_POST['sartu'])){
            if ($_POST['erabiltzailea'] == "mario" && $_POST['pasahitza'] == "mario"){

                //echo "*";
                $admin = true;

                //erabiltzailea izeneko kookie-a sortu, bere balioa admin eta bere iraupena egun bat
                setcookie("erabiltzailea","mario",time() + 86400);//60*60*24
            }
        } else if(isset($_COOKIE['erabiltzailea']) && $_COOKIE['erabiltzailea'] == "mario"){
            $admin=true;
        }

        //administrazioa baimenduta bada albisteen zerrenda erakutsi, bestela hasierako formularioa
        if($admin == true){

            $eskariak = Mario_brosDB::selectEskariak();
            include('eskariak_erakutsi.php');
        }else{
            if (isset($_POST['sartu'])){ 
                $mezua = "Datuak ez dira zuzenak";

            } else {
        
                $mezua = "";
            }
            include('login.php');
        }
    ?>