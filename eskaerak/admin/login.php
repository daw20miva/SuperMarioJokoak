<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Bezeroak</title>
    </head>
    <body>
        <h1>Administrazio gunea</h1>
        <p><?php echo $mezua ?></p>
        <form action="" method="post">
        <p>
        <label for="erabiltzailea">Erabiltzailea</label>
        <input type="text" id="erabiltzailea" name="erabiltzailea" />
        </p>
        <p>
        <label for="pasahitza">Pasahitza</label>
        <input type="password" id="pasahitza" name="pasahitza" />
        </p>
        <p>
        <input type="submit"  value="Sartu"  name="sartu" />
        </p>
    </body>
</html>