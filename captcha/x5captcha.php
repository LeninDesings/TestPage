<?php
include("../res/x5engine.php");
$nameList = array("c7k","hcv","xtu","ph2","lvd","uxv","gtn","yyw","lv7","uy2");
$charList = array("K","N","8","P","P","G","7","W","F","T");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
