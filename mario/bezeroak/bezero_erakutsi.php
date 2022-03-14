<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Bezeroak</title>
    </head>
    <body>
        <h1>Bezeroak</h1>
        <p><a href=".">Hasiera</a> &gt;</p>
        <h2><?php echo $bezero->getId() ?></h2>
        <p><b>Nan:</b><?php echo $bezero->getNan() ?></p> 
        <p><b>Izena:</b><?php echo $bezero->getProduktu_izena() ?></p> 
        <p><b>Abizena:</b><?php echo $bezero->getAbizena() ?></p>
        <p><b>Emaila:</b><?php echo $bezero->getEmaila() ?></p>
        <p><b>Telefonoa:</b><?php echo $bezero->getTelefonoa() ?></p>
        <p><b>Helbidea:</b><?php echo $bezero->getHelbidea() ?></p>  
        <p><b>Kode postea:</b><?php echo $bezero->getKode_postea() ?></p>    
        <p><b>Probintzia:</b><?php echo $bezero->getProbintzia() ?></p>     
        <p><b>Herrialdea:</b><?php echo $bezero->getHerrialdea() ?></p>
    </body>
    
</html>