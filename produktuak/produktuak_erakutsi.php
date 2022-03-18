<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <title>Produktuak</title>
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
  overflow: hidden;
  padding-top: 1%;
}
.container .slider {
  animation: slidein 30s linear infinite;
  white-space: nowrap;
}
.container .slider .logos {
  width: 100%;
  display: inline-block;
  margin: 0px 0;
}
.container .slider .logos .fab {
  width: calc(100% / 5);
  animation: fade-in 0.5s cubic-bezier(0.455, 0.03, 0.515, 0.955) forwards;
}

.container img{
	max-width:250px;
  margin-left: 20px;
}

@keyframes slidein {
  from {
    transform: translate3d(0, 0, 0);
  }
  to {
    transform: translate3d(-100%, 0, 0);
  }
}
@keyframes fade-in {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}
.Iam {
  padding: 2em 5em;
  font: normal 40px/50px Montserrat, sans-serif;
  color: rgb(245, 0, 0);
}
.Iam p {
  height: 50px;
  float: left;
  margin-right: 0.3em;
}
.Iam b {
  float: left;
  overflow: hidden;
  position: relative;
  height: 50px;
  top: 40px;
}
.Iam .innerIam {
  display: inline-block;
  color: #e74c3c;
  position: relative;
  white-space: nowrap;
  top: 0;
  left: 0;


/*animation*/
-webkit-animation:move 5s;
   -moz-animation:move 5s;
    -ms-animation:move 5s;
     -o-animation:move 5s;
        animation:move 5s;
/*animation-iteration-count*/
-webkit-animation-iteration-count:1;
   -moz-animation-iteration-count:1;
    -ms-animation-iteration-count:1;
     -o-animation-iteration-count:1;
        animation-iteration-count:1;
/*animation-delay*/
-webkit-animation-delay:1s;
   -moz-animation-delay:1s;
    -ms-animation-delay:1s;
     -o-animation-delay:1s;
        animation-delay:1s;
}
@keyframes move{
0%  { top: 0px; }
20% { top: -50px; }
40% { top: -100px; }
60% { top: -150px; }
80% { top: -200px; }
}

@-webkit-keyframes move {
    0%  { top: 0px; }
    20% { top: -50px; }
    40% { top: -100px; }
    60% { top: -150px; }
    80% { top: -200px; }
}
@-moz-keyframes move {
    0%  { top: 0px; }
    20% { top: -50px; }
    40% { top: -100px; }
    60% { top: -150px; }
    80% { top: -200px; }
}
@-o-keyframes move {
    0%  { top: 0px; }
    20% { top: -50px; }
    40% { top: -100px; }
    60% { top: -150px; }
    80% { top: -200px; }
}
@keyframes move {
    0%  { top: 0px; }
    20% { top: -50px; }
    40% { top: -100px; }
    60% { top: -150px; }
    80% { top: -200px; }
}
/* coloress en en texto en movimiento */
.animate-charcter
{
  background-image: linear-gradient(
    -225deg,
    #0026ff 0%,
    #ff0000 29%,
    #13ff13 67%,
    #fff800 100%
  );
  background-clip: border-box;
  background-size: 200% auto;
  color: #fff;
  background-clip: text;
  text-fill-color: transparent;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  animation: textclip 10s linear infinite;
  display: inline-block;

}

@keyframes textclip {
  to {
    background-position: 200% center;
  }
}

*,
*::before,
*::after {
  box-sizing: border-box;
}

:root {
  --color-primary: #d4d4d4;
  --color-secondary: #969696;
  --color-tertiary: #707070;
  --color-quaternary: #414141;
  --color-quinary: #1f1f1f;
  /*
  --color-primary: #5192ED;
  --color-secondary: #69A1F0;
  --color-tertiary: #7EAEF2;
  --color-quaternary: #90BAF5;
  --color-quinary: #A2C4F5;
  */
}




.text_shadows {
  text-shadow: 3px 3px 0 var(--color-secondary), 6px 6px 0 var(--color-tertiary), 9px 9px var(--color-quaternary), 12px 12px 0 var(--color-quinary);
  font-family: bungee, sans-serif;
  font-weight: 400;
  font-size: calc(2rem + 5vw);
  text-align: center;
  color: var(--color-primary);
  -webkit-animation: shadows 1.2s ease-in infinite, move 1.2s ease-in infinite;
          animation: shadows 1.2s ease-in infinite, move 1.2s ease-in infinite;
  letter-spacing: 0.4rem;
}

@-webkit-keyframes shadows {
  0% {
    text-shadow: none;
  }
  10% {
    text-shadow: 3px 3px 0 var(--color-secondary);
  }
  20% {
    text-shadow: 3px 3px 0 var(--color-secondary), 6px 6px 0 var(--color-tertiary);
  }
  30% {
    text-shadow: 3px 3px 0 var(--color-secondary), 6px 6px 0 var(--color-tertiary), 9px 9px var(--color-quaternary);
  }
  40% {
    text-shadow: 3px 3px 0 var(--color-secondary), 6px 6px 0 var(--color-tertiary), 9px 9px var(--color-quaternary), 12px 12px 0 var(--color-quinary);
  }
  50% {
    text-shadow: 3px 3px 0 var(--color-secondary), 6px 6px 0 var(--color-tertiary), 9px 9px var(--color-quaternary), 12px 12px 0 var(--color-quinary);
  }
  60% {
    text-shadow: 3px 3px 0 var(--color-secondary), 6px 6px 0 var(--color-tertiary), 9px 9px var(--color-quaternary), 12px 12px 0 var(--color-quinary);
  }
  70% {
    text-shadow: 3px 3px 0 var(--color-secondary), 6px 6px 0 var(--color-tertiary), 9px 9px var(--color-quaternary);
  }
  80% {
    text-shadow: 3px 3px 0 var(--color-secondary), 6px 6px 0 var(--color-tertiary);
  }
  90% {
    text-shadow: 3px 3px 0 var(--color-secondary);
  }
  100% {
    text-shadow: none;
  }
}

@keyframes shadows {
  0% {
    text-shadow: none;
  }
  10% {
    text-shadow: 3px 3px 0 var(--color-secondary);
  }
  20% {
    text-shadow: 3px 3px 0 var(--color-secondary), 6px 6px 0 var(--color-tertiary);
  }
  30% {
    text-shadow: 3px 3px 0 var(--color-secondary), 6px 6px 0 var(--color-tertiary), 9px 9px var(--color-quaternary);
  }
  40% {
    text-shadow: 3px 3px 0 var(--color-secondary), 6px 6px 0 var(--color-tertiary), 9px 9px var(--color-quaternary), 12px 12px 0 var(--color-quinary);
  }
  50% {
    text-shadow: 3px 3px 0 var(--color-secondary), 6px 6px 0 var(--color-tertiary), 9px 9px var(--color-quaternary), 12px 12px 0 var(--color-quinary);
  }
  60% {
    text-shadow: 3px 3px 0 var(--color-secondary), 6px 6px 0 var(--color-tertiary), 9px 9px var(--color-quaternary), 12px 12px 0 var(--color-quinary);
  }
  70% {
    text-shadow: 3px 3px 0 var(--color-secondary), 6px 6px 0 var(--color-tertiary), 9px 9px var(--color-quaternary);
  }
  80% {
    text-shadow: 3px 3px 0 var(--color-secondary), 6px 6px 0 var(--color-tertiary);
  }
  90% {
    text-shadow: 3px 3px 0 var(--color-secondary);
  }
  100% {
    text-shadow: none;
  }
}
@-webkit-keyframes move {
  0% {
    transform: translate(0px, 0px);
  }
  40% {
    transform: translate(-12px, -12px);
  }
  50% {
    transform: translate(-12px, -12px);
  }
  60% {
    transform: translate(-12px, -12px);
  }
  100% {
    transform: translate(0px, 0px);
  }
}
@keyframes move {
  0% {
    transform: translate(0px, 0px);
  }
  40% {
    transform: translate(-12px, -12px);
  }
  50% {
    transform: translate(-12px, -12px);
  }
  60% {
    transform: translate(-12px, -12px);
  }
  100% {
    transform: translate(0px, 0px);
  }
}
/*
** Apply styles to the parent element
*/
.Words {
  margin: 0 auto;
  padding: 80px 0;
  font-size: 68px;
  font-weight: 900;
  letter-spacing: -2px;
  text-transform: uppercase;
  transform: translate3d(0, 0, 0);
  -webkit-font-smoothing: antialiased;

  -webkit-text-size-adjust: 100%;
}

/*
** Apply common styles to each line of text
*/
.Words-line {
  height: 50px;
  overflow: hidden;
  position: relative;
}
.Words-line:nth-child(odd) {
  transform: skew(60deg, -30deg) scaleY(0.66667);
}
.Words-line:nth-child(even) {
  transform: skew(0deg, -30deg) scaleY(1.33333);
}
.Words-line:nth-child(1) {
  left: 29px;
}
.Words-line:nth-child(2) {
  left: 58px;
}
.Words-line:nth-child(3) {
  left: 87px;
}
.Words-line:nth-child(4) {
  left: 116px;
}
.Words-line:nth-child(5) {
  left: 145px;
}
.Words-line:nth-child(6) {
  left: 174px;
}
.Words-line:nth-child(7) {
  left: 203px;
}

/*
** Fine-grained text styles
*/
#escaleras p {
  height: 50px;
  line-height: 45px;
  padding: 0 10px;
  transition: all 0.4s ease-in-out;
  transform: translate3d(0, 0, 0);
  vertical-align: top;
  white-space: nowrap;
}

.mexiwave [data-scroll='in'] .char {
  -webkit-animation: wave 0.25s calc(var(--char-index) * 0.1s) ease;
          animation: wave 0.25s calc(var(--char-index) * 0.1s) ease;
}
@-webkit-keyframes wave {
  50% {
    transform: translate(0, -50%);
  }
}
@keyframes wave {
  50% {
    transform: translate(0, -50%);
  }
}
.text__container {
  align-items: center;
  color: #fff;
  display: flex;
  font-size: var(--font-size);
  height: 100vh;
  justify-content: center;
  overflow: hidden;
  font-weight: 300;
  text-align: center;
  width: 100vw;
}
/*
** The hover interaction
*/
.Words:hover p {
  transform: translate3d(0, -50px, 0);
}
span {
  border-right: .05em solid;
  animation: caret 1s steps(1) infinite;
}

@keyframes caret {
  50% {
    border-color: transparent;
  }
}

.plata img{
  max-width: 105px;
}

.pegi img{
  float:right;
  max-width: 100px;
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
        <div class="row">
<div class="col-md-12 text-center">
  <img src="../images/gure_katalogoa.png" style="max-width: 800px; padding: 40px;">
  <br>
</div>
<br>
</div>
        <?php
//Columns must be a factor of 12 (1,2,3,4,6,12)
$numOfCols = 3;
$rowCount = 0;
$bootstrapColWidth = 12 / $numOfCols;
?>
<div class="row">
<?php
foreach ($produktuak as $produktua){
?>  
        <div class="col-md-<?php echo $bootstrapColWidth; ?>  p-4 mb-4 text-center">
        <img src="../images/<?php echo $produktua->getId() ?>_produktua.png" style="max-width: 250px"> <br><br>
<a href="./?id=<?php echo $produktua->getId() ?>" style="text-decoration: none; color: white;"><?php echo $produktua->getProduktu_izena() ?></a></dt>
      <h2 style="color:white; font-family: Nhas;">  <?php echo $produktua->getPrezioa() ?> &euro;</h2>     
           
                

        </div>
<?php
    $rowCount++;
    if($rowCount % $numOfCols == 0) echo '</div><div class="row">';
}
?>
</div>
</div>
<br><br><br>
<img src="../images/footer_bg3.png" usemap="#image-map">

<map name="image-map">
    <area target="" alt="" title="" href="../mario/" coords="938,28,865,113" shape="rect">
</map>
    </body>
</html>