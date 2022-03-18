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

    $server = "localhost";
    $user = "mario_bros";
    $pass = "mario_bros";
    $bd = "mario_bros";

    $conexion = mysqli_connect($server, $user, $pass,$bd)

    or die("Ha sucedido un error inexperado en la conexion de la base de datos");

    $registros=mysqli_query($conexion,"INSERT INTO bezeroak (nan,izena,abizena,emaila,telefonoa,helbidea,kode_postea,probintzia,herrialdea ) VALUES ('$nan','$izena','$abizena','$emaila','$telefonoa','$helbidea','$kode_postea','$probintzia','$herrialdea')")
    
    or die("Problemas en el insert".mysqli_error($conexion));
    echo $registros;
    echo "Datuak ondo sartuta daude, <br> <a style='text-decoration:none;color:white; font-size:30px;'href='../php2/index.php'>Jarraitu eskaerarekin.</a><br> ";
?>