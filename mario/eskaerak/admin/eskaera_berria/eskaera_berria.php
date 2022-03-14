
<!DOCTYPE html>
<head> 
    <meta http-equiv="Content-Type" content="text/html ; charset=UTF-8">
</head>
<body>
    <h1>Eskaeren administrazio gunea</h1>
    <p><a href="..">Hasiera</a> &gt;</p>
    <h2>Eskaera berria</h2>
    <p><?php echo $mezua ?></p>
    <form action="index.php" method="post">
    <p>
    <label for="eskaera_id">Eskaera id</label>
    <input type="text" id="eskaera_id" name="eskaera_id" size="50" maxlength="255"value="<?php echo $eskaera_id ?>">
    </p>
    <p>
    <label for="produktua_id">Produktua id</label>
    <textarea id="produktua_id" name="produktua_id"><?php echo $produktua_id ?></textarea>
    </p> 
    <p>
    <label for="eskari_data">Eskari data</label>
    <input id="eskari_data" name="eskari_data"value="<?php echo $eskari_data ?>">
    </p>
    <p>
    <label for="produktu_izena">Produktu izena</label>
    <input id="produktu_izena" name="produktu_izena" value="<?php echo $produktu_izena ?>">
    </p>  
    <p>
    <label for="kantitatea">Kantitatea</label>
    <input id="kantitatea" name="kantitatea" value="<?php echo $kantitatea ?>">
    </p> 
    <p>
    <label for="prezio_totala">Prezio Totala</label>
    <input id="prezio_totala" name="prezio_totala" value="<?php echo $prezio_totala ?>">
    </p> 
    <p>
    <label for="bezero_nan">Kode postea</label>
    <input id="bezero_nan" name="bezero_nan" value="<?php echo $bezero_nan ?>">
    </p> 
    <p>
        <input type="submit" name="gorde" value="Gorde" />
    </p>
</form>
</body>
<html>



