
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html ; charset=UTF-8">
        <title>Saskia</title>
</head>
<body>
                            <h1>Saskiaren administrazio gunea</h1>
                            <p><a href="../index.php">Hasiera</a> &gt;</p>
                            <h2>Saskia aldatu</h2>
                            <p><?php echo $mezua ?></p>
                            <form  action="" method="post">
                            <p>
                            <label for="produktua_id">Produktua id</label>
                            <input id="produktua_id" name="produktua_id" size="20" maxlength="255"value="<?php echo $produktua_id ?>" readonly>
                            </p>
                            <p>
                            <label for="produktu_izena">Produktu izena</label>
                            <input id="produktu_izena" name="produktu_izena" size="20" maxlength="255"value="<?php echo $produktu_izena?>">
                            </p>
                            <p>
                            <label for="nan">Nan</label>
                            <input id="nan" name="bezero_nan" size="20" maxlength="255"value="<?php echo $nan?>">
                            </p>
                            <p>
                            <label for="kantitatea">Kantitatea</label>
                            <input id="kantitatea" name="kantitatea" size="20" maxlength="255"value="<?php echo $kantitatea?>">
                            </p>
                            <p>
                            <label for="prezioa">Prezioa</label>
                            <input id="prezioa" name="prezioa" size="20" maxlength="255"value="<?php echo $prezioa?>">
                            </p>
                            <p>
                            <label for="prezio_totala">Prezioa totala</label>
                            <input id="prezio_totala" name="prezio_totala" size="20" maxlength="255"value="<?php echo $prezio_totala?>">
                            </p>
                            
                            <p>
                            <input type="submit" name="gorde" value="Gorde" /><input type="text" id="id_saskia" name="id_saskia" value="<?php echo $id_saskia ?>" readonly>
                            </p>
                        </form>

         </body>
 </html>