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
        <p><b>Izena:</b><?php echo $produktua->getProduktu_izena() ?></p>
        <p><b>Prezioa:</b><?php echo $produktua->getPrezioa() ?></p>    
        <p><b>Xehetasunak:</b><?php echo $produktua->getXehetasunak() ?></p> 
        <p><b>Deskribapena:</b><?php echo $produktua->getDeskribapena() ?></p>
        <p><b>Detalles:</b><?php echo $produktua->getDetalles() ?></p> 
        <p><b>Descripcion:</b><?php echo $produktua->getDescripcion() ?></p>           
    </body>
    
</html>