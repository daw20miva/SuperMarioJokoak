
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html ; charset=UTF-8">
        <title>Detailea</title>
</head>
<body>
                            <h1>Detailearen administrazio gunea</h1>
                            <p><a href="../index.php">Hasiera</a> &gt;</p>
                            <h2>Detailea aldatu</h2>
                            <p><?php echo $mezua ?></p>
                            <form  action="" method="post">
                            <p>
                            <label for="id">Produktua id</label>
                            <input id="id" name="id" size="20" maxlength="255"value="<?php echo $id ?>" readonly>
                            </p>
                            <p>
                            <label for="id_eskaria">Id eskaria</label>
                            <input id="id_eskaria" name="id_eskaria" size="20" maxlength="255"value="<?php echo $id_eskaria?>">
                            </p>
                            <!--<p>
                            <label for="nan">Nan</label>
                            <input id="nan" name="bezero_nan" size="20" maxlength="255"value="<?php echo $nan?>">
                            </p>-->
                            <p>
                            <label for="kopurua">Kopurua</label>
                            <input id="kopurua" name="kopurua" size="20" maxlength="255"value="<?php echo $kopurua?>">
                            </p>
                            <p>
                            <label for="prezioa">Prezioa</label>
                            <input id="prezioa" name="prezioa" size="20" maxlength="255"value="<?php echo $prezioa?>">
                            </p>
                           <!-- <p>
                            <label for="prezio_totala">Prezioa totala</label>
                            <input id="prezio_totala" name="prezio_totala" size="20" maxlength="255"value="<?php echo $prezio_totala?>">
                            </p>-->
                            
                            <p>
                            <input type="submit" name="gorde" value="Gorde" /><input type="text" id="id" name="id" value="<?php echo $id ?>" readonly>
                            </p>
                        </form>

         </body>
 </html>