
<!DOCTYPE html>
<html>
		<head>
				<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
				<title>Eskaera</title>
		</head>
		<body>

                    <h1>Eskaeran administrazio gunea</h1>
                    <p><a href="..">Hasiera</a> &gt;</p>
                    <h2>Eskaera ezabatu</h2>
                    <p>Eskaera ez da ezabatu</p>
                    <table cellspacing="5" cellpadding="5" border="1">
                    <tr>
                        <td align="rigth">Produktua_id:</td>
                        <td><?php echo $produktua_id ?></td>
                    </tr>
                    <tr>
                        <td align="rigth">Eskari_data:</td>
                        <td><?php echo $eskari_data ?></td>
                    </tr>
                    <tr>
                        <td align="rigth">produktu_izena:</td>
                        <td><?php echo $produktu_izena ?></td>
                    </tr>
                    <td align="rigth">kantitatea:</td>
                        <td><?php echo $kantitatea ?></td>
                    </tr>
                    <tr>
                        <td align="rigth">prezio Totala:</td>
                        <td><?php echo $prezio_totala ?></td>
                    </tr>
                    <tr>
                        <td align="rigth">bezero nan:</td>
                        <td><?php echo $bezero_nan ?></td>
                    </tr>
                    </table>
                    <form  action="eskaera_ezabatu.php" method="post"> 
                    <p>Ziur zaude?</p>
                    <input type="submit" name="Bai" value="Bai">
                    <input type="submit" name="Ez" value="Ez">
                    <input type="text" id="eskaera_id" name="nan" value="<?php echo  $bezero->getEskaera_id() ?>" readonly>
                    </form>
</body>
</html>       