<?php

$_date=strtotime("+50 days",time());


$num=$_POST["num"];
$buy=$_POST["buy"];
if ($buy=="a1")
{
	setcookie("num1",$num,$date);
	setcookie("buy1","0",$date);
}
if ($buy=="a2")
{
	setcookie("num2",$num,$date);
	setcookie("buy2","0",$date);
}
if ($buy=="a3")
{
	setcookie("num3",$num,$date);
	setcookie("buy3","0",$date);
}

header('Location: catalog.php');


?>