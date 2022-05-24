<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Detaileak</title>
    </head>
    <body>
        <h1>Detaileak</h1>
        <dl>
            <?php foreach ($detaileak as $detailea) { ?>
                <dt><a href="./?id=<?php echo $detailea->getId() ?>"><?php echo $detailea->getId_eskaria() ?></a></dt>
                <dd>Prezioa: <?php echo $detailea->getPrezioa() ?>€</dd>
            <?php } ?>
        </dl>
    </body>
</html>