<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Bezeroak</title>
    </head>
    <body>
        <h1>Bezeroak</h1>
        <dl>
            <?php foreach ($bezeroak as $bezero) { ?>
                <dt><a href="./?id=<?php echo $bezero->getId() ?>"></dt>
                <br>
                <dd>Nan: <?php echo $bezero->getNan() ?></a></dd>
                <dd>Izena: <?php echo $bezero->getIzena() ?></a></dd>
            
            <?php } ?>
        </dl>
    </body>
</html>