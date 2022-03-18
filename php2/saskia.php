<?php
$servername = "localhost";
$username = "mario_bros";
$password = "mario_bros";
$dbname = "mario_bros";

$produktua_id = $_GET['produktua_id'];
    $produktu_izena = $_GET['produktu_izena'];
    $nan = $_GET['nan'];
    $prezioa = $_GET['prezioa'];
    $kantitatea  = $_GET['kantitatea'];
    $prezio_totala = $_GET['prezio_totala'];
    
 



    $conn = mysqli_connect($servername, $username, $password,$dbname)

    or die("Ha sucedido un error inexperado en la conexion de la base de datos");

$sql=mysqli_query($conn,"INSERT INTO saskia (produktua_id,produktu_izena,nan,prezioa,kantitatea,prezio_totala ) VALUES ('$produktua_id','$produktu_izena','$nan','$prezioa','$kantitatea','$prezio_totala')")


or die("Problemas en el insert".mysqli_error($conn));

echo $sql;
?>