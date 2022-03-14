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

require('../../klaseak/eskaerak.eskaera.php');
require('../../klaseak/eskaerak.eskaera_db.php');
use  \eskaerak\Mario_brosDB;


//use daw20miva\albisteak\Albistea;
    
 if (isset($_POST['Bai'])) {

    
    if(Mario_brosDB::deleteBezero($_POST['id']) > 0){
      
        include('eskaera_ezabatu_da.php');
    

    }else {
        
        include('eskaera_ez_da_ezabatu.php');
      }
     
 } else if (isset($_POST['Ez'])) {
   
    
     header("Location: ../index.php");
 

 } else {

     $id = filter_input(INPUT_GET,"id", FILTER_VALIDATE_INT); 

     if ($id !== false && $id !== null) {

         $eskaera = Mario_brosDB::selectBezero($id); 

         if ($eskaera != null) {
           
             $eskaera_id = $eskaera->getEskaera_id(); 
             $produktua_id = $eskaera->getProduktua_id(); 
             $eskari_data = $eskaera->getEskari_data(); 
             $produktu_izena = $eskaera->getProduktu_izena(); 
            $kantitatea = $eskaera->getKantitatea();
            $prezio_totala = $eskaera->getPrezio_totala();
            $bezero_nan = $eskaera->getBezero_nan();
          
            
             include('eskaera_ezabatu.php'); 

     } else {

         include('eskaera_id_baliogabea.php'); 
     }
     
 
 }  else {
     include('eskaera_id_baliogabea.php'); 
  }


} ?>