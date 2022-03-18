<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Stock-a</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
      
        body{
        background-image: url("../../../images/bg_stripe.png");
  background-repeat:repeat;
  text-align: center;
  font-family: Nhas;
       }
       @font-face {
  font-family: Nhas;
  src: url(../../../Nhas.ttf);
}
       h1{
    font-family: Nhas;
    text-align: center;
    color:white;
    font-size:80px;
}
h2{
    font-family: Nhas;
    text-align: center;
    color:white;
    font-size:20px;
}
label{
    color:white;
    font-size:30px;
}
      

.formlario{
    margin: auto;
  width: 40%;
  border: 3px solid white;
  padding: 10px;
}
      </style>
    </head>
    <body>
        <br>
        <br>
    <img src="../../../images/Warp_Box.png" style="max-width:250px;">
        <h1>Stock</h1>
        <h2 >Administrazio gunea</h2>
        <br>
        <p><?php echo $mezua ?></p>
        <div class="formlario">
        <form action="index.php" method="post">
        <p>
        <label for="erabiltzailea">Erabiltzailea</label><br>
        <input type="text" id="erabiltzailea" name="erabiltzailea" />
        </p>
        <p>
        <label for="pasahitza">Pasahitza</label><br>
        <input type="password" id="pasahitza" name="pasahitza" />
        </p>
        <p>
        <input type="submit"  value="Sartu"  name="sartu" />
        </p>
</div>
<br>
        <a href="../../index.php" style="text-decoration:none; color:white;font-size:30px;">Itzuli</a>
    </body>
</html>