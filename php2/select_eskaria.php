<?php
$servername = "localhost";
$username = "mario_bros";
$password = "mario_bros";
$dbname = "mario_bros";

$id_produktua = $_GET['id_produktua'];
$nan = $_GET['nan'];

$conn = mysqli_connect($servername, $username, $password,$dbname)

    or die("Ha sucedido un error inexperado en la conexion de la base de datos");

$registros=mysqli_query($conn,"select a.id, a.produktu_izena, a.xehetasunak, b.nan, b.izena, b.abizena from produktuak a,bezeroak b where a.id = $id_produktua and b.nan=$nan")

or die("Problemas en el insert".mysqli_error($conn));

$eskaria = Array();
while($reg=mysqli_fetch_array($registros)) 
        { 
        
            $id = $reg['id'];
            $produktu_izena = $reg['produktu_izena'];
            $xehetasunak = $reg['xehetasunak'];
            $nan = $reg['nan'];
            $izena = $reg['izena'];
            $abizena = $reg['abizena'];
            $nan = $reg['nan'];

            
                $vec[]=array('id'=>$id,'produktu_izena'=>$produktu_izena,'xehetasunak'=>$xehetasunak,'nan'=>$nan,'izena'=>$izena,'abizena'=>$abizena,'nan'=>$nan);
            
 }  

 echo json_encode($vec);
 $close = mysqli_close($conexion)
?>