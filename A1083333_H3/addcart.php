<?php


$_date=strtotime("+100 days",time());
setcookie("totol",$totol,$date);

$num=$_POST["num"];
$buy=$_POST["buy"];
if ($buy=="b1") 
{
	setcookie("num1",$num,$date);
	setcookie("buy1","0",$date);

}
if ($buy=="b2") 
{
	setcookie("num2",$num,$date);
	setcookie("buy2","0",$date);

}
if ($buy=="b3") 
{
	setcookie("num3",$num,$date);
	setcookie("buy3","0",$date);
	
}

header('Location: catalog.php');
?>