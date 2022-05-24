<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Eskariak</title>
    </head>
    <body>
        <h1>Eskariak</h1>
        <p><a href=".">Hasiera</a> &gt;</p>
        <h2><?php echo $eskaria->getId() ?></h2>
        <p><b>Data:</b><?php echo $eskaria->getData() ?></p> 
        <p><b>Izena:</b><?php echo $eskaria->getIzena() ?></p> 
        <p><b>Abizena:</b><?php echo $eskaria->getAbizena() ?></p>
        <p><b>Emaila:</b><?php echo $eskaria->getEmaila() ?></p>
        <p><b>Helbidea:</b><?php echo $eskaria->getHelbidea() ?></p>  
        <p><b>Kode postea:</b><?php echo $eskaria->getPk() ?></p>    
        <p><b>Probintzia:</b><?php echo $eskaria->getProbintzia() ?></p>     
        <p><b>Herria:</b><?php echo $eskaria->getHerria() ?></p>
    </body>
    
</html>