<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<title>Denda</title>
		<style>
       body{
        background-image: url("../../images/bg_stripe.png");
  background-repeat:repeat;
       }
    


@font-face {
  font-family: Nhas;
  src: url(Nhas.ttf);
}

h1{
    font-family: Nhas;
}

.info,


.info {
  color: #fff;
  display: flex;
  justify-content: center;
  padding: 5rem 0;
  text-align: center;
}

@font-face {
  font-family: Nhas;
  src: url(../Nhas.ttf);
}

h1{
    font-family: Nhas;
}


.panel-content {
  align-content: center;
  background: rgba(3, 18, 27, 0.26);
  display: flex;
  flex-wrap: wrap;
  height: 100%;
  left: 0;
  position: absolute;
  top: 0;
  width: 100%;
}

header {
  align-items: center;
  background: linear-gradient(-45deg, #03121b, #07273b);
  color: #fff;
  display: flex;
  height: 100px;
  left: 0;
  padding: 0 10%;
  position: fixed;
  top: 0;
  width: 100%;
  z-index: 9;
}

.container {
  overflow: ;
  padding-top: 1%;
}


nav {
    position: fixed;
    width: 100%;
    top: 0;
    left: 0;
    z-index: 10;
    display: flex;
    justify-content: space-between;
    float: left;
}

nav ul {
    list-style: none;
    display: flex;
    margin-right: 30px;
    margin-top: 30px;
}

nav ul li:not(:last-child) {
    margin-right: 50px;
float: left;
}

nav ul li a {
    text-decoration: none;
    color: black;
    float: left;
}
.my-class:after {
  content: '>';
  color: white;
}


    </style>
	</head>
	<body>
	<nav style="background-color: #fff; padding-bottom: 15px;">
        <div id="logo"></div>
        <div class="bg">
            <div class="el">
			</div>
    </nav>
    <br>
    <br>
    <br>
    <br>
    <br>
	<div class="container border border-3 border-white">
	<p><a href="."style="color:white;"><?php echo $etiketa_hasiera; ?></a></p>
        <div class="row">
<div class="col-md-12 text-center">
	
  <img src="../images/bg_block.png" style="width:100%">
  </div>
</div>
<div class="row">
<div class="pt-5 col-md-6 text-center">
		
	
		<h2 style="color:white; font-family: Nhas;"><?php echo $produktua->getIzenburua() . "-" . $produktua->getXehetasunak() ?></h2>
		<img style='max-width: 200px;' src="images/<?php echo $produktua->getId(); ?>_produktua.png">
</div>
<div class="pt-5 col-md-6">
		<br>
		<br>
		<br>
		<p style="color:white; font-family: Nhas;"><?php echo $produktua->getDeskribapena(); ?></p>
		<p style="color:white; font-family: Nhas;"><?php echo $etiketa_xehetasunak . ": " . $produktua->getXehetasunak(); ?></p>
		<p style="color:white; font-family: Nhas;"> <?php echo $etiketa_prezioa . ": " . $produktua->getPrezioa(); ?> &euro;</p>
		
		<form action="saskia/" method="post">
		<input type="text" size="2" name="id" value="<?php echo $produktua->getId(); ?>" readonly>
		<input type="text" size="2" name="kopurua" value="1" readonly>
		<input type="submit" name="gehitu" value="<?php echo $etiketa_saskira_gehitu; ?>">
		<br>
		</form>
		
	</div>
	</div>
	<br><br>

	<div class="col-md-12 text-center">
	
	<img src="../images/bg_block.png" style="width:100%">
	</div>

	</body>

</html>


