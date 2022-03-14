<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Bezeroak</title>
    </head>
    <body>
        <h1>Bezeroen administrazio gunea</h1>
        <h2>Bezeroak</h2>
        <ul>
        <?php for ($i=0 ; $i < count($bezeroak) ; $i ++) { ?>
            <li><?php echo $bezeroak[$i]->getIzena() ?>
        
        </li>
            <?php } ?>
        </ul>
       <!-- <form action="bezero_berria/" method="post">
        <p><input type="submit" value="Bezero berria" /></p>
        </form>-->
        <p><a href="irten.php">Sesiotik irten</a></p>
        </body>
</html>