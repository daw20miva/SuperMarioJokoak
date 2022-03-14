<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Stocka</title>
    </head>
    <body>
        <h1>Stocka</h1>
        <dl>
            <?php foreach ($stockak as $stock) { ?>
                <dt><a href="./?id=<?php echo $stock->getProduktua_id() ?>"><?php echo $stock->getProduktua_id() ?></a></dt>
                <dd>Kopurua: <?php echo $stock->getKopurua() ?></dd>
            <?php } ?>
        </dl>
    </body>
</html>