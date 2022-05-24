<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Eskariak</title>
    </head>
    <body>
        <h1>Eskarien administrazio gunea</h1>
        <h2>Eskariak</h2>
        <ul>
        <?php for ($i=0 ; $i < count($eskariak) ; $i ++) { ?>
            <li>
           <?php echo $eskariak[$i]->getData() ?> | <?php echo $eskariak[$i]->getIzena() ?> | <?php echo $eskariak[$i]->getAbizena() ?> | <?php echo $eskariak[$i]->getEmaila() ?> | <?php echo $eskariak[$i]->getHelbidea() ?> | <?php echo $eskariak[$i]->getPk() ?> | <?php echo $eskariak[$i]->getProbintzia() ?> | <?php echo $eskariak[$i]->getHerria() ?> 
        
        </li>
            <?php } ?>
        </ul>
       <!-- <form action="bezero_berria/" method="post">
        <p><input type="submit" value="Bezero berria" /></p>
        </form>-->
        <p><a href="irten.php">Sesiotik irten</a></p>
        </body>
</html>
<?php 