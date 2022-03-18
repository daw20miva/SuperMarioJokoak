<?php

    $nan = $_GET['nan'];
    $izena = $_GET['izena'];
    $abizena = $_GET['abizena'];
    $emaila  = $_GET['emaila'];
    $telefonoa = $_GET['telefonoa'];
    $helbidea  = $_GET['helbidea'];
    $kode_postea  = $_GET['kode_postea'];
    $probintzia  = $_GET['probintzia'];
    $herrialdea  = $_GET['herrialdea'];

$servername = "localhost";
$username = "mario_bros";
$password = "mario_bros";
$dbname = "mario_bros";


    $conn = mysqli_connect($servername, $username, $password,$dbname)

    or die("Ha sucedido un error inexperado en la conexion de la base de datos");

    $sql=mysqli_query($conn,"INSERT INTO bezeroak (nan,izena,abizena,emaila,telefonoa,helbidea,kode_postea,probintzia,herrialdea ) VALUES ('$nan','$izena','$abizena','$emaila','$telefonoa','$helbidea','$kode_postea','$probintzia','$herrialdea')")
    
    or die("Problemas en el insert".mysqli_error($conn));
    echo $sql;

?>