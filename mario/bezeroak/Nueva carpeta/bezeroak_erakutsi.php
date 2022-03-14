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
                <dt><a href="./?nan=<?php echo $bezero->getNan() ?>"><?php echo $bezero->getIzena() ?></a></dt>
                <dd><?php echo $bezero->getAbizena() ?></dd>
            <?php } ?>
        </dl>
    </body>
</html>