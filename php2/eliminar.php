<?php
$servername = "localhost";
$username = "mario_bros";
$password = "mario_bros";
$dbname = "mario_bros";


$conn = mysqli_connect($servername, $username, $password,$dbname)

or die("Ha sucedido un error inexperado en la conexion de la base de datos");

$sql=mysqli_query($conn,"TRUNCATE TABLE saskia")

or die("Problemas en el insert".mysqli_error($conn));


?>
<html>
    <body>
    <h1 style="text-align: center; font-size: 100px">Eskerrik asko zure erosketagatik!!<h1>
        <br>
        <br>
    <div style="margin-top: 12%;">
    <form action="index.php" method="post">
    <input type="submit" name="Erosten Jarraitu" value="Erosten Jarraitu" />
</form>
<form action="../index.html" method="post">
    <input type="submit" name="Hasiera" value="Hasiera" />
</form>
</div>
</body>
</html>