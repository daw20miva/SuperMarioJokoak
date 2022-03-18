
<!DOCTYPE html>
<head> 
    <meta http-equiv="Content-Type" content="text/html ; charset=UTF-8">
    <title>Produktuak</title>
</head>
<body>
    <h1>Produktuen administrazio gunea</h1>
    <p><a href="..">Hasiera</a> &gt;</p>
    <h2>Produktu berria</h2>
    <p><?php echo $mezua ?></p>
    <form action="" method="post">
    <p>
    <label for="id">id</label>
    <input   id="id" name="id" size="30" maxlength="255" value="<?php echo $id ?>">
    </p>
    <p>
    <label for="produktu_izena">Produktu izena</label>
    <input id="produktu_izena" name="produktu_izena" size="30" maxlength="255"value="<?php echo $produktu_izena ?>">
    </p>
    <p>
    <label for="prezioa">Prezioa</label>
    <input id="prezioa" name="prezioa" size="20" maxlength="255"value="<?php echo $prezioa?>">
    </p>
    <p>
    <label for="xehetasunak">Xehetasunak</label>
    <input id="xehetasunak" name="xehetasunak" size="20" maxlength="255"value="<?php echo $xehetasunak ?>">
    </p>
    <p>
    <label for="deskribapena">Deskribapena</label>
    <input id="deskribapena" name="deskribapena" size="20" maxlength="255"value="<?php echo $deskribapena?>">
    </p>
    <p>
    <label for="detalles">Detalles</label>
    <input id="detalles" name="detalles" size="20" maxlength="255"value="<?php echo $detalles?>">
    </p>
    <p>
    <label for="descripcion">Descripcion</label>
    <input id="descripcion" name="descripcion" size="20" maxlength="255"value="<?php echo $descripcion?>">
    </p>  
    <p>
        <input type="submit" name="gorde" value="Gorde" />
    </p>
</form>
</body>
<html>



