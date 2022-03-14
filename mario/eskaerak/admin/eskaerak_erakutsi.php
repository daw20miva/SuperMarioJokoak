<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Eskaerak</title>
    </head>
    <body>
        <h1>Eskaeren administrazio gunea</h1>
        <h2>Eskaerak</h2>
        <ul>
        <?php for ($i=0 ; $i < count($eskaerak) ; $i ++) { ?>
            <li><?php echo $eskaerak[$i]->getEskaera_id() ?><a> | </a><?php echo $eskaerak[$i]->getProduktua_id() ?><a> | </a><?php echo $eskaerak[$i]->getEskari_data() ?><a> | </a><?php echo $eskaerak[$i]->getProduktu_izena() ?><a> | </a><?php echo $eskaerak[$i]->getKantitatea() ?><a> | </a><?php echo $eskaerak[$i]->getPrezio_totala() ?><a> | </a><?php echo $eskaerak[$i]->getBezero_nan() ?>
            [<a href="eskaera_aldatu/?eskaera_id=<?php echo $eskaerak[$i]->getEskaera_id() ?> ">Aldatu</a>]
            
            </li>
            <?php } ?>
        </ul>
       <!-- <form action="eskaera_berria/" method="post">
        <p><input type="submit" value="Eskaera berria" /></p>
        </form>-->
        <p><a href="../irten.php">Sesiotik irten</a></p>
        </body>
</html>