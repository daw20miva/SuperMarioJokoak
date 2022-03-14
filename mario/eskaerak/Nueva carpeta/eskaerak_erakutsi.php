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
                <dt><a href="./?eskaera_id=<?php echo $eskaera->getEskaera_Id() ?>"><?php echo $eskaera->getEskari_data() ?></a></dt>
                <dd><br> 
                <dd><b>Eskari data: </b><?php echo $eskaera->getEskari_data() ?></dd>
                <dd><br>
                <dd><b>Produktuaren izena: </b><?php echo $eskaera->getProduktu_izena() ?></dd>
                <dd><br>
                <dd><b>Kantitatea: </b><?php echo $eskaera->getKantitatea() ?></dd>
                <dd><br>
                <dd><b>Prezioa: </b><?php echo $eskaera->getPrezio_totala() ?>€</dd>
                <dd><br>
                <dd><b>Bezeroaren Nan: </b><?php echo $eskaera->getBezero_nan() ?></dd>
            <?php } ?>
        </dl>
    </body>
</html>