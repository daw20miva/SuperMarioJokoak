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
        <p><b>Data:</b><?php echo $eskaera->getEskari_data() ?></p>
        <p><b>Izena:</b><?php echo $eskaera->getPoduktu_izena() ?></p>
        <p><b>Kantitatea:</b><?php echo $eskaera->getKantitatea() ?></p>    
        <p><b>Prezio Totala:</b><?php echo $eskaera->getPrezioa_totala() ?></p>    
       
    </body>
    
</html>