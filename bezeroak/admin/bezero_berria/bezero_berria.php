
<!DOCTYPE html>
<head> 
    <meta http-equiv="Content-Type" content="text/html ; charset=UTF-8">
</head>
<body>
    <h1>Bezeroen administrazio gunea</h1>
    <p><a href="..">Hasiera</a> &gt;</p>
    <h2>Bezero berria</h2>
    <p><?php echo $mezua ?></p>
    <form action="index.php" method="post">
    <p>
    <label for="izena">Izena</label>
    <input type="text" id="izena" name="izena" size="50" maxlength="255"value="<?php echo $izena ?>">
    </p>
    <p>
    <label for="abizena">Abizena</label>
    <textarea id="abizena" name="abizena"><?php echo $abizena ?></textarea>
    </p> 
    <p>
    <label for="emaila">Emaila</label>
    <input id="emaila" name="emaila"value="<?php echo $emaila ?>">
    </p>
    <p>
    <label for="telefonoa">Telefonoa</label>
    <input id="telefonoa" name="telefonoa" value="<?php echo $telefonoa ?>">
    </p>  
    <p>
    <label for="telefonoa">Telefonoa</label>
    <input id="telefonoa" name="telefonoa" value="<?php echo $telefonoa ?>">
    </p> 
    <p>
    <label for="helbidea">Helbidea</label>
    <input id="helbidea" name="helbidea" value="<?php echo $helbidea ?>">
    </p> 
    <p>
    <label for="kode_postea">Kode postea</label>
    <input id="kode_postea" name="kode_postea" value="<?php echo $kode_postea ?>">
    </p> 
    <p>
    <label for="probintzia">Telefonoa</label>
    <input id="probintzia" name="probintzia" value="<?php echo $probintzia ?>">
    </p> 
    <p>
        <input type="submit" name="gorde" value="Gorde" />
    </p>
</form>
</body>
<html>



