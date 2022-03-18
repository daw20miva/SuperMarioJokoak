<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Eskaerak</title>
    </head>
    <body>
        <h1>Eskaerak</h1>
        <p><a href=".">Hasiera</a> &gt;</p>
        <h2><?php echo $eskaera->getEskaera_id() ?></h2>
        <p><b>Produktu id:</b><?php echo $eskaera->getProduktua_id() ?></p>
        <p><b>Data:</b><?php echo $eskaera->getEskari_data() ?></p>    
        <p><b>Izena:</b><?php echo $eskaera->getProduktu_izena() ?></p> 
        <p><b>Kantitatea:</b><?php echo $eskaera->getKantitatea() ?></p>
        <p><b>Prezioa:</b><?php echo $eskaera->getPrezio_totala() ?></p>
        <p><b>Bezero_nan:</b><?php echo $eskaera->getBezero_nan() ?></p>           
    </body>
    
</html>