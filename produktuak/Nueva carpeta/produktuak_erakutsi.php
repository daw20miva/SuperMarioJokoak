<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Produktuak</title>
    </head>
    <body>
        <h1>Produktuak</h1>
        <dl>
            <?php foreach ($produktuak as $produktua) { ?>
                <dt><a href="./?id=<?php echo $produktua->getId() ?>"><?php echo $produktua->getProduktu_izena() ?></a></dt>
                <dd><?php echo $produktua->getPrezioa() ?></dd>
                <img src="img/<?php echo $produktua->getId() ?>.png">
            <?php } ?>
        </dl>
    </body>
</html>