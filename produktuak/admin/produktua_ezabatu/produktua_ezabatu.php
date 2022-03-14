
<!DOCTYPE html>
<html>
		<head>
				<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
				<title>Produktuak</title>
		</head>
		<body>

        <h1>Produktuen administrazio gunea</h1>
				<p><a href="..">Hasiera</a> &gt;</p> 
				<h2>Produktua ezabatu</h2>
               
                <form action="index.php" method="post">
                <p>

                <table cellspacing="5" cellpadding="5" border="1">
                <tr>
                    <td align="rigth">Produktu izena	:</td>
                    <td><?php echo $produktu_izena	 ?></td>
                </tr>
                <tr>
                    <td align="rigth">Prezioa:</td>
                    <td><?php echo $prezioa ?></td>
                </tr>
                <tr>
                    <td align="rigth">Xehetasunak:</td>
                    <td><?php echo $xehetasunak ?></td>
                </tr>
                <tr>
                    <td align="rigth">Deskribapena:</td>
                    <td><?php echo $deskribapena ?></td>
                </tr>
                <tr>
                    <td align="rigth">Detalles:</td>
                    <td><?php echo $detalles ?></td>
                </tr>
                <tr>
                    <td align="rigth">Descripcion:</td>
                    <td><?php echo $descripcion ?></td>
                </tr>
                </table>
                    <form  action="produktua_ezabatu.php" method="post"> 
                    <p>Ziur zaude?</p>
                    <input type="submit" name="Bai" value="Bai">
                    <input type="submit" name="Ez" value="Ez">
                    <input type="text" id="id" name="id" value="<?php echo  $produktua->getId() ?>" readonly>
                    </form>
</body>
</html>       