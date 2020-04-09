<?php
ob_start();
session_start();

$item=$_POST["Item"];
$number=$_POST["number"];
$date=strtotime("+10 days", time());
if ($item==chicken)
{
	setcookie("Itemchi",$item,$date);
	setcookie("numberchi",$number,$date);
}

if ($item==duck) 
{
	setcookie("Itemduk",$item,$date);
	setcookie("numberduk",$number,$date);
}

if ($item==curry) 
{
	setcookie("Itemcurry",$item,$date);
	setcookie("numbercur",$number,$date);
}
header('Location:catalog.php');
?> 