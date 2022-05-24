<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Detailea</title>
    </head>
    <body>
        <h1>Detailearen administrazio gunea</h1>
        <h2>Detailea</h2>
        <ul>
        <?php for ($i=0 ; $i < count($detaileak) ; $i ++) { ?>
            <li><p><b>Id: </b><?php echo $detaileak[$i]->getId() ?><a> | </a><b>Id eskaria: </b><?php echo $detaileak[$i]->getId_eskaria() ?><a> | </a><b>Id produktua:  </b><?php echo $detaileak[$i]->getId_produktua() ?><a> | </a><b>Kopurua: </b><?php echo $detaileak[$i]->getKopurua() ?><a> | </a><b> Prezio unitarioa: </b><?php echo $detaileak[$i]->getPrezioa() ?><a>
            </p>
            </li>
            <?php } ?>
        </ul>
        <p><a href="irten.php">Sesiotik irten</a></p>
        </body>
</html>