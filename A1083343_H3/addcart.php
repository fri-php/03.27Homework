<?php

$_date=strtotime("+50 days",time());
setcookie("totol",$totol,$date);

$number=$_POST["number"];
$goods=$_POST["goods"];
if ($goods=="Coke")
{
	setcookie("number1",$number,$date);
	setcookie("goods1","0",$date);
}

if ($goods=="Water")
{
	setcookie("number2",$number,$date);
	setcookie("goods2","0",$date);
}

if ($goods=="Juice")
{
	setcookie("number3",$number,$date);
	setcookie("goods3","0",$date);
}

if ($goods=="Wine")
{
	setcookie("number4",$number,$date);
	setcookie("goods4","0",$date);
	
}

header('Location: catalog.php');
?>