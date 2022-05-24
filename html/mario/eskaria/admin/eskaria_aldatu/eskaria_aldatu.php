
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html ; charset=UTF-8">
        <title>Eskariak</title>
</head>
<body>
     <h1>Eskarien administrazio gunea</h1>
    <p><a href="../index.php">Hasiera</a> &gt;</p>
    <h2>Eskaria aldatu</h2>
    <p><?php echo $mezua ?></p>
    <h2>Eskaria</h2>
    <form action="index.php" method="post">
    <label for="izena">Izena</label>
    <input type="text" id="izena" name="izena" size="30" maxlength="255"value="<?php echo $izena ?>">
    </p>
    <p>
    <label for="abizena">Abizena</label>
    <textarea id="abizena" name="abizena"><?php echo $abizena ?></textarea>
    </p> 
    <p>
    <label for="helbidea">helbidea</label>
    <input id="helbidea" name="helbidea" size="20" maxlength="255"value="<?php echo $helbidea?>">
    </p>
    <p>
    <label for="herria">herria</label>
    <input id="herria" name="herria" size="20" maxlength="255"value="<?php echo $herria?>">
    </p>
    <p>
    <label for="Pk">Kode postea</label>
    <input id="Pk" name="Pk" size="20" maxlength="255"value="<?php echo $Pk?>">
    </p>
    <p>
    <label for="probintzia">Probintzia</label>
    <input id="probintzia" name="probintzia" size="20" maxlength="255"value="<?php echo $probintzia?>">
    </p>
    <p>
    <label for="emaila">Emaila</label>
    <input id="emaila" name="emaila" size="20" maxlength="255"value="<?php echo $emaila ?>">
    </p>
    <p>
    <input type="submit" name="gorde" value="Gorde" /><input type="text" id="id" name="id" value="<?php echo $id ?>" readonly>
    </p>
    </form>
         </body>
 </html>