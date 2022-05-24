<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Denda</title>
		<style>
       body{
        background-image: url("../../images/bg_stripe.png");
  background-repeat:repeat;
       }
    </style>
	</head>
	<body>
		<h1 style="color:white;">Produktuak</h1>
		<p style="color:white;"><a style="color:white;" href=".."><?php echo $etiketa_hasiera; ?></a> &gt;</p>
		<h2 style="color:white;"><?php echo $etiketa_eskaria; ?></h2>
		<p><?php echo $mezua ?></p>
		<form action="index.php" method="post">
		<p>
		<label  style="color:white;"for="izena"><?php echo $etiketa_izena; ?></label>
		<input type="text" id="izena" name="izena" size="50" maxlength="250" value="<?php echo $izena ?>">
		</p>
		<p>
		<label style="color:white;" for="abizena"><?php echo $etiketa_abizena; ?></label>
		<input type="text" id="abizena" name="abizena" size="50" maxlength="250" value="<?php echo $abizena ?>">
		</p>
		<p>
		<label style="color:white;" for="helbidea"><?php echo $etiketa_helbidea; ?></label>
		<input type="text" id="helbidea" name="helbidea" size="50" maxlength="250" value="<?php echo $helbidea ?>">
		</p>
		<p>
		<label style="color:white;" for="herria"><?php echo $etiketa_herria; ?></label>
		<input type="text" id="herria" name="herria" size="50" maxlength="250" value="<?php echo $herria ?>">
		</p>
		<p>
		<label style="color:white;" for="pk"><?php echo $etiketa_pk; ?></label>
		<input type="text" id="pk" name="pk" size="50" maxlength="250" value="<?php echo $pk ?>">
		</p>
		<p>
		<label style="color:white;" for="probintzia"><?php echo $etiketa_probintzia; ?></label>
		<input type="text" id="probintzia" name="probintzia" size="50" maxlength="250" value="<?php echo $probintzia ?>">
		</p>
		<p>
		<label style="color:white;" for="emaila"><?php echo $etiketa_emaila; ?></label>
		<input type="text" id="emaila" name="emaila" size="50" maxlength="255" value="<?php echo $emaila ?>">
		</p>
		<p>
		<input  type="submit" name="bidali" value="<?php echo $etiketa_bidali; ?>" />
		</p>
		</form>
	</body>
</html>
