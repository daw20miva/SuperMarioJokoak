
<!DOCTYPE html>
<head> 
    <meta http-equiv="Content-Type" content="text/html ; charset=UTF-8">
    <title>Stock-a</title>
</head>
<body>
    <h1>Stock-aren administrazio gunea</h1>
    <p><a href="..">Hasiera</a> &gt;</p>
    <h2>Stock berria</h2>
    <p><?php echo $mezua ?></p>
    <form action="index.php" method="post">
    <p>
    <label for="produktua_id">Produktuaren id</label>
    <input  id="produktua_id" name="produktua_id" size="30" maxlength="255"value="<?php echo $produktua_id ?>">
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
<html>



