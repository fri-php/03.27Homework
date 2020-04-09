<?php
session_start();

$checknumberX="1";
$checknumberY="2";
$checknumberZ="3";

$number=$_POST["goods"];
$quantity=$_POST["quantity"];

if($number==$checknumberX)
{
	$date=strtotime("+30days",time());
	setcookie("quantityA",$quantity, $date);
	header('Location:cart.php');
}
if($number==$checknumberY)
{
	$date=strtotime("+30days",time());
	setcookie("quantityB",$quantity, $date);
	header('Location:cart.php');
}

if($number==$checknumberZ)
{
	$date=strtotime("+30days",time());
	setcookie("quantityC",$quantity, $date);
	header('Location:cart.php');
}



?>