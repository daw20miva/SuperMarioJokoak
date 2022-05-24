<?php 

//albisteen administrazioa baimenduta dagoen ala ez jakiteko indikadorea
$admin = false;

//erabiltzailea izeneko kookie-a existitzen bada eta bere balioa admina bada, orduan, albisteen kudeaketa baimendu
if (isset($_COOKIE['erabiltzailea']) && $_COOKIE['erabiltzailea'] == "admin"){

	$admin = true;
}


require('../../klaseak/mario.produktuak.produktua.php');
require('../../klaseak/mario.produktuak.produktua_db.php');
use mario\produktuak\Mario_brosDB;


    
 if (isset($_POST['Bai'])) {

    
    if(Mario_brosDB::deleteProduktua($_POST['id']) > 0){
      
        include('produktua_ezabatu_da.php');
    

    }else {
        
        include('produktua_ez_da_ezabatu.php');
      }
     
 } else if (isset($_POST['Ez'])) {
   
    
     header("Location: ../index.php");
 

 } else {

     $id = filter_input(INPUT_GET,"id", FILTER_VALIDATE_INT); 

     if ($id !== false && $id !== null) {

         $produktua = Mario_brosDB::selectProduktua($id); 

         if ($produktua != null) {
           
            $izenburua = $produktua->getIzenburua();
            $prezioa = $produktua->getPrezioa();
            $xehetasunak = $produktua->getXehetasunak();
            $deskribapena = $produktua->getDeskribapena();
            $detalles = $produktua->getDetalles();
            $descripcion = $produktua->getDescripcion();
            
             include('produktua_ezabatu.php'); 

     } else {

         include('produktua_id_baliogabea.php'); 
     }
     
 
 }  else {
     include('produktua_id_baliogabea.php'); 
  }


} ?>