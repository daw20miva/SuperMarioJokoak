<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Stock</title>
    </head>
    <body>
        <h1>Stock</h1>
        <dl>
            <?php foreach ($stockak as $stock) { ?>
                <dt><a href="./?produktua_id=<?php echo $stock->getProduktua_id() ?>"><?php echo $stock->getProduktua_id() ?></a></dt>
                <dd><?php echo $stock->getKopurua() ?>€</dd>
                
            <?php } ?>
        </dl>
    </body>
</html>