<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <title><?php echo $produktua->getProduktu_izena() ?></title>
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
        <ul>
        <li><a href="../index.html">Hasiera</a></li>
            <li><a href="">Jokoak</a></li>
          
            <li><a href="../kontaktua.html">Kontaktua</a></li>
        </ul>
    </div>
    </nav>
    <br>
    <br>
    <br>
    <br>
    <br>
        <div class="container border border-3 border-white">
            <p><a style="color:white;" href="."><b>Atzera bueltatu</b></a> <span class="my-class"></span></p>
        <div class="row">
<div class="col-md-12 text-center">
  <img src="../images/bg_block.png" style="width:100%">
   
        <!-- <h2><?php echo $produktua->getId() ?></h2> -->
</div>
</div>
<div class="row">
<div class="pt-5 col-md-6 text-center">
<img src="../images/<?php echo $produktua->getId() ?>_produktua.png" style="max-width: 350px">
</div>
<div class="pt-5 col-md-6">
 <h1 style="color:white;font-size:80px;"><?php echo $produktua->getProduktu_izena() ?></h1>
 <p style="color:white;"><b><?php echo $produktua->getXehetasunak() ?></b></p> 
        <h1 style="color:white;"><?php echo $produktua->getPrezioa() ?> &euro;</h1>    
        <i class="fa-solid fa-cart-shopping"></i>
        <i class="fa-solid fa-cart-shopping-fast"></i>
       <a href="login.html" class="icon-block">
        <i class="fa fa-shopping-cart" style="font-size:36px;color:white;"></i>
</a>
</div>
</div>
<br>
<hr style="border: 4px solid white;">

        <p style="color:white;"><b>Deskribapena: </b> <br><?php echo $produktua->getDeskribapena() ?></p>
        

<img src="../images/bg_block.png" style="width:100%">    
<br><br>
       
              
</div>
<br><br>
<img src="../images/footer_bg3.png" usemap="#image-map">

<map name="image-map">
    <area target="" alt="" title="" href="../mario/" coords="938,28,865,113" shape="rect">
</map>
    </body>

    
</html>