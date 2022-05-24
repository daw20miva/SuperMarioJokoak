<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Eskariak</title>
    </head>
    <body>
        <h1>Eskariak</h1>
        <dl>
            <?php foreach ($eskariak as $eskaria) { ?>
                <dt><a href="./?id=<?php echo $eskaria->getId() ?>"></dt>
                <br>
                <dd>Data: <?php echo $eskaria->getData() ?></a></dd>
                <dd>Izena: <?php echo $eskaria->getIzena() ?></a></dd>
            
            <?php } ?>
        </dl>
    </body>
</html>