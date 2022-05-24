<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Detaileak</title>
    </head>
    <body>
        <h1>Detaileak</h1>
        <p><a href=".">Hasiera</a> &gt;</p>
        <h2><?php echo $detailea->getId() ?></h2>
        <p><b>Produktu id:</b><?php echo $detailea->getId_eskaria() ?></p>
        <p><b>Id produktua:</b><?php echo $detailea->getId_produktua() ?></p>    
        <p><b>Kopurua:</b><?php echo $detailea->getKopurua() ?></p>        
    </body>
    
</html>