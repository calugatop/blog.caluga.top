<?php
include("../res/x5engine.php");
$nameList = array("lez","ucs","ll7","hlr","8ge","ctw","n5r","krc","rk7","5c7");
$charList = array("J","T","6","N","A","A","4","W","M","N");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
