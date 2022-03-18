<?php
$servername = "localhost";
$username = "mario_bros";
$password = "mario_bros";
$dbname = "mario_bros";

$nan = $_GET['nan'];
 
    $conn = mysqli_connect($servername, $username, $password,$dbname)

    or die("Ha sucedido un error inexperado en la conexion de la base de datos");

$sql=mysqli_query($conn,"INSERT INTO saskia (nan) VALUES ('$nan')")


or die("Problemas en el insert".mysqli_error($conn));

echo $sql;
?>