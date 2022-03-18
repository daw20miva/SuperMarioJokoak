<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html ; charset=UTF-8">
        <title>Stocka</title>
</head>
<body>
    <h1>Stocken administrazio gunea</h1>
    <p><a href="../index.php">Hasiera</a> &gt;</p>
    <h2>Stok aldatu</h2>
    <p><?php echo $mezua ?></p>
    <form  action="" method="post">
    <p>
    <label for="produktua_id">Produktua id</label>
    <input  id="produktua_id" name="produktua_id" value="<?php echo $produktua_id ?>" readonly>
    </p>
     <p>
    <label for="kopurua">Kopurua</label>
    <input id="kopurua" name="kopurua" size="20" maxlength="255"value="<?php echo $kopurua?>">
    </p>
    <p>
    <input type="submit" name="gorde" value="Gorde" />
    </p>
    </form>
</body>
</html>