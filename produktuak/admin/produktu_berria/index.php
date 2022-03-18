<?php 
require('../../klaseak/mario.produktuak.produktua.php');
require('../../klaseak/mario.produktuak.produktua_db.php');
use mario\produktuak\Mario_brosDB;
use mario\produktuak\Produktua;

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

                $id = filter_input(INPUT_POST, 'id',FILTER_VALIDATE_INT);
                $produktu_izena = filter_input(INPUT_POST, 'produktu_izena');
                $prezioa = filter_input(INPUT_POST, 'prezioa',FILTER_VALIDATE_FLOAT);//FILTER_VALIDATE PARA NUMEROS
                $xehetasunak = filter_input(INPUT_POST, 'xehetasunak');
                $deskribapena = filter_input(INPUT_POST, 'deskribapena');
                $detalles = filter_input(INPUT_POST, 'detalles');
                $descripcion = filter_input(INPUT_POST, 'descripcion');

                //if (strlen($izenburua) > 0 && strlen($laburpena) > 0 && strlen($denbora) > 0 && strlen($prezioa)){
                if($id != null && $id != false && $produktu_izena != null && $prezioa != null && $prezioa != false && $xehetasunak != null && $deskribapena != null && $detalles != null && $descripcion != null){
                
               
               
                $produktu_izena = strip_tags($produktu_izena);//Si tuviese un editor esto quitaria las etiquetas "p". Esto quita todas las etiquetas
                $xehetasunak = strip_tags($xehetasunak);//urtea ez dugu garbitu behar eta prezioari ere ez
                $deskribapena = strip_tags($deskribapena);
                $detalles = strip_tags($detalles);
                $descripcion = strip_tags($descripcion);


                $produktua= new Produktua();
                $produktua->setId($id);
                $produktua->setProduktu_izena($produktu_izena);
                $produktua->setPrezioa($prezioa);
                $produktua->setXehetasunak($xehetasunak);
                $produktua->setDeskribapena($deskribapena);
                $produktua->setDetalles($detalles);
                $produktua->setDescripcion($descripcion);

                if (Mario_brosDB::updateProduktua($produktua) > 0) {
                    include('produktua_gorde_da.php');

                }else {
                    include('produktua_ez_da_gorde.php');
                }
            }else{
                if($prezioa == false ){
                    $mezua =" Datuak ez dira zuzenak";
                }else{
                $mezua ="Eremu guztiak bete behar dira";
                }
                include('produktu_berria.php');
            }
             }else{
                $produktu_izena = "";
                $prezioa = "";
                $xehetasunak = "";
                $deskribapena = "";
                $detalles = "";
                $descripcion = "";
                $mezua = "";
                include('produktu_berria.php');

            }
        }else{
            header("location: ../index.php");
    } ?>