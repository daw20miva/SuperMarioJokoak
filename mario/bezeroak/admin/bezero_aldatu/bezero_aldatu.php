
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html ; charset=UTF-8">
        <title>Bezeroak</title>
</head>
<body>

                            <h1>Bezeroen administrazio gunea</h1>
                            <p><a href="../index.php">Hasiera</a> &gt;</p>
                            <h2>Bezeroa aldatu</h2>
                            <p><?php echo $mezua ?></p>
                            <form  action="" method="post">
                            <p>
                            <label for="izena">Izena</label>
                            <input type="text" id="izena" name="izena" size="30" maxlength="255"value="<?php echo $izena ?>">
                            </p>
                            <p>
                            <label for="abizena">Abizena</label>
                            <textarea id="abizena" name="abizena"><?php echo $abizena ?></textarea>
                            </p> 
                            <p>
                            <label for="emaila">Emaila</label>
                            <input id="emaila" name="emaila" size="20" maxlength="255"value="<?php echo $emaila ?>">
                            </p>
                            <p>
                            <label for="telefonoa">Telefonoa</label>
                            <input id="telefonoa" name="telefonoa" size="20" maxlength="255"value="<?php echo $telefonoa?>">
                            </p>
                            <p>
                            <label for="helbidea">helbidea</label>
                            <input id="helbidea" name="helbidea" size="20" maxlength="255"value="<?php echo $helbidea?>">
                            </p>
                            <p>
                            <label for="kode_postea">Kode postea</label>
                            <input id="kode_postea" name="kode_postea" size="20" maxlength="255"value="<?php echo $kode_postea?>">
                            </p>
                            <p>
                            <label for="probintzia">Probintzia</label>
                            <input id="probintzia" name="probintzia" size="20" maxlength="255"value="<?php echo $probintzia?>">
                            </p>
                            <p>
                            <label for="herrialdea">Herrialdea</label>
                            <input id="herrialdea" name="herrialdea" size="20" maxlength="255"value="<?php echo $herrialdea?>">
                            </p>
                            <p>
                            <input type="submit" name="gorde" value="Gorde" /><input type="text" id="id" name="id" value="<?php echo $id ?>" readonly>
                            </p>
                        </form>

         </body>
 </html>