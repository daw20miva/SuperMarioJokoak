<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Saskia</title>
    </head>
    <body>
        <h1>Saskiaren administrazio gunea</h1>
        <h2>Saskia</h2>
        <ul>
        <?php for ($i=0 ; $i < count($saskiak) ; $i ++) { ?>
            <li><?php echo $saskiak[$i]->getId_saskia() ?><a> | </a><?php echo $saskiak[$i]->getProduktua_id() ?><a> | </a><?php echo $saskiak[$i]->getProduktu_izena() ?><a> | </a><?php echo $saskiak[$i]->getNan() ?> | </a><?php echo $saskiak[$i]->getKantitatea() ?><a> | </a><?php echo $saskiak[$i]->getPrezioa() ?><a> | </a><?php echo $saskiak[$i]->getPrezio_totala() ?><a> 
          
            
            </li>
            <?php } ?>
        </ul>
        <p><a href="irten.php">Sesiotik irten</a></p>
        </body>
</html>