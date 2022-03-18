<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Stock-a</title>
    </head>
    <body>
        <h1>Stock-aren administrazio gunea</h1>
        <h2>Stock-a</h2>
        <ul>
        <?php for ($i=0 ; $i < count($stockak) ; $i ++) { ?>
            <li><?php echo $stockak[$i]->getKopurua() ?>
            [<a href="stock_aldatu/?produktua_id=<?php echo $stockak[$i]->getProduktua_id() ?> ">Aldatu</a>]
        </li>
            <?php } ?>
        </ul>
       <form action="stock_berria/" method="post">
        <p><input type="submit" value="Stock berria" /></p>
        </form>
        <p><a href="irten.php">Sesiotik irten</a></p>
        </body>
</html>