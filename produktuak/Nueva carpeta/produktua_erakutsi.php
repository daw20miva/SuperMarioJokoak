<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Produktuak</title>
    </head>
    <body>
        <h1>Produktuak</h1>
        <p><a href=".">Hasiera</a> &gt;</p>
        <h2><?php echo $produktua->getId() ?></h2>
        <p><b>Izena:</b><?php echo $produktua->getPoduktu_izena() ?></p>
        <p><b>Prezioa:</b><?php echo $produktua->getPrezioa() ?></p>    
        <p><b>Xehetasunak:</b><?php echo $produktua->getXehetasunak() ?></p> 
        <p><b>Deskribapena:</b><?php echo $produktua->getDeskribapena() ?></p>      
    </body>
    
</html>