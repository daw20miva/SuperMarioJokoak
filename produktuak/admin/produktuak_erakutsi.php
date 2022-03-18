<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Produktuak</title>
    </head>
    <body>
        <h1>Produktuen administrazio gunea</h1>
        <h2>Produktuak</h2>
        <ul>
        <?php for ($i=0 ; $i < count($produktuak) ; $i ++) { ?>
            <li><?php echo $produktuak[$i]->getProduktu_izena() ?>
            [<a href="produktua_aldatu/?id=<?php echo $produktuak[$i]->getId() ?> ">aldatu</a>]
            [<a href="produktua_ezabatu/?id=<?php echo $produktuak[$i]->getId() ?> ">ezabatu</a>]
        </li>
            <?php } ?>
        </ul>
        <form action="produktu_berria/" method="post">
        <p><input type="submit" value="Produktu berria" /></p>
        </form>
        <p><a href="irten.php">Sesiotik irten</a></p>
        </body>
</html>
