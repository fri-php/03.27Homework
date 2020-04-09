<?php


$_date=strtotime("+100 days",time());
setcookie("total",$total,$date);

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
if ($buy=="b4") 
{
	setcookie("num4",$num,$date);
	setcookie("buy4","0",$date);
	
}
if ($buy=="b5") 
{
	setcookie("num5",$num,$date);
	setcookie("buy5","0",$date);
	
}

header('Location: catalog.php');
?>