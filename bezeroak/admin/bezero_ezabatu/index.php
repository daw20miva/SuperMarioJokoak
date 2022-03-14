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
use  \bezeroak\Mario_brosDB;


//use daw20miva\albisteak\Albistea;
    
 if (isset($_POST['Bai'])) {

    
    if(Mario_brosDB::deleteBezero($_POST['id']) > 0){
      
        include('bezero_ezabatu_da.php');
    

    }else {
        
        include('bezero_ez_da_ezabatu.php');
      }
     
 } else if (isset($_POST['Ez'])) {
   
    
     header("Location: ../index.php");
 

 } else {

     $id = filter_input(INPUT_GET,"id", FILTER_VALIDATE_INT); 

     if ($id !== false && $id !== null) {

         $bezero = Mario_brosDB::selectBezero($id); 

         if ($bezero != null) {
           
             $nan = $bezero->getNan(); 
             $izena = $bezero->getIzena(); 
             $abizena = $bezero->getAbizena(); 
             $emaila = $bezero->getEmaila(); 
            $telefonoa = $bezero->getTelefonoa();
            $helbidea = $bezero->getHelbidea();
            $kode_postea = $bezero->getKode_postea();
            $probintzia = $bezero->getProbintzia();
            $herrialdea = $bezero->getHerrialdea(); 
            
             include('bezero_ezabatu.php'); 

     } else {

         include('bezero_id_baliogabea.php'); 
     }
     
 
 }  else {
     include('bezero_id_baliogabea.php'); 
  }


} ?>