<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Eskaerak</title>
    </head>
    <body>
        <h1>Eskaerak</h1>
        <dl>
            <?php foreach ($eskaerak as $eskaera) { ?>
                <dt><a href="./?eskaera_id=<?php echo $eskaera->getEskaera_id() ?>"><?php echo $eskaera->getProduktu_izena() ?></a></dt>
                <dd>Prezioa: <?php echo $eskaera->getPrezio_totala() ?>€</dd>
            <?php } ?>
        </dl>
    </body>
</html>