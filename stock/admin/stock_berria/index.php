<?php 
require('../../klaseak/mario.stockak.stock.php');
require('../../klaseak/mario.stockak.stock_db.php');
use mario\stockak\Stock;
use mario\stockak\Mario_brosDB;

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
               // $izenburua = $_POST['izenburua'];
                //$laburpena = $_POST['laburpena'];
                //$denbora = $_POST['denbora'];
                //$prezioa = $_POST['prezioa'];
                $produktua_id = filter_input(INPUT_POST, 'produktua_id',FILTER_VALIDATE_INT);
                $kopurua = filter_input(INPUT_POST, 'kopurua',FILTER_VALIDATE_INT);

                //if (strlen($izenburua) > 0 && strlen($laburpena) > 0 && strlen($denbora) > 0 && strlen($prezioa)){
                if($produktua_id != null && $produktua_id != false && $kopurua != null && $kopurua != false ){

                $stock= new Stock();
                $stock->setProduktua_id($produktua_id);
                $stock->setKopurua($kopurua);

                if (Mario_brosDB::insertStock($stock) > 0) {
                    include('stock_gorde_da.php');

                }else {
                    include('stock_ez_da_gorde.php');
                }
            }else{
                if($kopurua == false ){
                    $mezua =" Datuak ez dira zuzenak";
                }else{
                $mezua ="Eremu guztiak bete behar dira";
                }
                include('stock_berria.php');
            }
             }else{
                $produktua_id = "";
                $kopurua = "";
                $mezua = "";
                include('stock_berria.php');

            }
        }else{
            header("location: ../index.php");
    } ?>