<?php 

$server = "localhost";
$user = "mario_bros";
$pass = "mario_bros";
$bd = "mario_bros";

$conexion = mysqli_connect($server, $user, $pass,$bd) 
or die("Ha sucedido un error inexperado en la conexion de la base de datos");


$registros=mysqli_query($conexion,"SELECT id,izenburua,prezioa FROM produktua where id=2")
    or die("Problemas en el select".mysqli_error($conexion));

if ($reg=mysqli_fetch_array($registros))
{
  $vec[]=$reg;
  echo json_encode($vec);
}
else{
    $vec = '';
    echo json_encode($vec);
}


$close = mysqli_close($conexion)
?>
