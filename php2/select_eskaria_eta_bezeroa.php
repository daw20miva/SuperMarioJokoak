<?php
$servername = "localhost";
$username = "mario_bros";
$password = "mario_bros";
$dbname = "mario_bros";

$conexion = mysqli_connect($servername, $username, $password,$dbname) 
or die("Ha sucedido un error inexperado en la conexion de la base de datos");

        $nan = $_GET['nan'];
        $registros=mysqli_query($conexion,"select a.nan, a.izena, a.abizena, a.emaila, a.telefonoa, a.helbidea, a.kode_postea, a.probintzia, b.produktua_id, b.produktu_izena, b.kantitatea, b.prezioa, b.prezio_totala from bezeroak a,saskia b where a.nan = b.nan and a.nan='$nan'")
        or die("Problemas en el select".mysqli_error($conexion));       
        //$erregistroa = $erregistroak->fetch();
        $saskia = Array(); 
        while ($reg=mysqli_fetch_array($registros)){

            $nan = $reg['nan'];
            $izena = $reg['izena'];
            $abizena = $reg['abizena'];
            $emaila = $reg['emaila'];
            $telefonoa = $reg['telefonoa'];
            $helbidea = $reg['helbidea'];
            $kode_postea = $reg['kode_postea'];
            $probintzia = $reg['probintzia'];
            $produktua_id = $reg['produktua_id'];
            $produktu_izena = $reg['produktu_izena'];
            $kantitatea = $reg['kantitatea'];
            $prezioa = $reg['prezioa'];
            $prezio_totala = $reg['prezio_totala'];
          
            $vec[]=array('nan'=>$nan,'izena'=>$izena,'abizena'=>$abizena,'emaila'=>$emaila,'telefonoa'=>$telefonoa,'helbidea'=>$helbidea,'kode_postea'=>$kode_postea,'probintzia'=>$probintzia,'produktua_id'=>$produktua_id,'produktu_izena'=>$produktu_izena,'kantitatea'=>$kantitatea,'prezioa'=>$prezioa,'prezio_totala'=>$prezio_totala);
            
            
          }
          echo json_encode($vec);
          $close = mysqli_close($conexion)
          ?>