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
    

table{
	color:white;
	border-color:white;
	
	
}

tr,td{
	color:white;
	border-color:white;
	
	border-collapse: separate;
	
}
</style>
	</head>
	<body>
		<h1 style="color:white;">Produktuak</h1>
		<p style="color:white;"><a  style="color:white;" href=".."><?php echo $etiketa_hasiera; ?></a> &gt; </p>
		<h2 style="color:white;"><?php echo $etiketa_saskia; ?></h2>
		<?php if (count($saskia->getDetaileak())>0) {?>
			<table cellspacing="5" cellpadding="5" border="1">
			<tr>
			<td><?php echo $etiketa_produktua; ?></td>
			<td><?php echo $etiketa_prezioa; ?></td>
			<td><?php echo $etiketa_kopurua; ?></td>
			<td><?php echo $etiketa_guztira; ?><td>
			</tr>
			<?php
			foreach ($saskia->getDetaileak() as $detailea) { ?>
				<tr valign="top">
				<td><?php echo $detailea->getProduktua()->getIzenburua() . "-" . $detailea->getProduktua()->getXehetasunak()?></td>
				<td><?php echo $detailea->getProduktua()->getPrezioa() ?> &euro;</td>
				<td>
				<form action="" method="post">
				<input type="text" size="2" name="id" value="<?php echo $detailea->getProduktua()->getId() ?>" style="background-color:#ccc" readonly>
				<input type="text" size="2" name="kopurua" value="<?php echo $detailea->getKopurua() ?>">
				<input type="submit" name="eguneratu" value="<?php echo $etiketa_eguneratu; ?>">
				</form>
				</td>
				<td><?php echo $detailea->getGuztira() ?> &euro;</td>
				<td>
				<form action="" method="post">
				<input type="hidden" size="2" name="id" value="<?php echo $detailea->getProduktua()->getId() ?>" style="background-color:#ccc" readonly>
				<input type="hidden" size="2" name="kopurua" value="0" style="background-color:#ccc" readonly>
				<input type="submit" name="ezabatu" value="<?php echo $etiketa_ezabatu; ?>">
				</form>
				</td>
				</tr>
			<?php } ?>
			</table>
			<p>
			<form action="../eskaria" method="post">
			<input type="submit" value="<?php echo $etiketa_eskaria_egin; ?>">
			</form>
			</p>
		<?php } else { ?>
			<p style="color:white;"><?php echo $etiketa_saskia_hutsik_dago; ?></p>
		<?php } ?>
	</body>
</html>








