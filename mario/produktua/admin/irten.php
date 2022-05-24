<?php

//sesioa ezabatu eta hasierako orrira itzuli.
session_start();
//unset('erabiltzailea');
setcookie("erabiltzailea","",time()-3600);//3600 segunduak dira
//session_destroy();
header("location:index.php");

?>