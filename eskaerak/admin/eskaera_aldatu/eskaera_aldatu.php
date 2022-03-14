
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html ; charset=UTF-8">
        <title>Eskaerak</title>
</head>
<body>
                            <h1>Eskaeran administrazio gunea</h1>
                            <p><a href="../index.php">Hasiera</a> &gt;</p>
                            <h2>Eskaera aldatu</h2>
                            <p><?php echo $mezua ?></p>
                            <form  action="" method="post">
                            <p>
                            <label for="produktua_id">Produktua id</label>
                            <input id="produktua_id" name="produktua_id" size="20" maxlength="255"value="<?php echo $produktua_id ?>">
                            </p>
                            <p>
                            <label for="eskari_data">Eskari data</label>
                            <input id="eskari_data" name="eskari_data" size="20" maxlength="255"value="<?php echo $eskari_data ?>">
                            </p>
                            <p>
                            <label for="produktu_izena">Produktu izena</label>
                            <input id="produktu_izena" name="produktu_izena" size="20" maxlength="255"value="<?php echo $produktu_izena?>">
                            </p>
                            <p>
                            <label for="kantitatea">Kantitatea</label>
                            <input id="kantitatea" name="kantitatea" size="20" maxlength="255"value="<?php echo $kantitatea?>">
                            </p>
                            <p>
                            <label for="prezio_totala">Prezioa totala</label>
                            <input id="prezio_totala" name="prezio_totala" size="20" maxlength="255"value="<?php echo $prezio_totala?>">
                            </p>
                            <p>
                            <label for="bezero_nan">Bezero nan</label>
                            <input id="bezero_nan" name="bezero_nan" size="20" maxlength="255"value="<?php echo $bezero_nan?>">
                            </p>
                            <p>
                            <input type="submit" name="gorde" value="Gorde" /><input type="text" id="eskaera_id" name="eskaera_id" value="<?php echo $eskaera_id ?>" readonly>
                            </p>
                        </form>

         </body>
 </html>