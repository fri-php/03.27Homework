<?php
session_start();
//if(isset($_SESSION[""]))


$checknumber1="s001";
$checknumber2="s002";
$checknumber3="s003";

$number=$_POST["merchandise"];
$quantity=$_POST["quantity"];

if($number==$checknumber1)
{
	$date=strtotime("+100days",time());
	setcookie("quantity1",$quantity, $date);
	header('Location:shoppingcart.php');
}
if($number==$checknumber2)
{
	$date=strtotime("+100days",time());
	setcookie("quantity2",$quantity, $date);
	header('Location:shoppingcart.php');
}

if($number==$checknumber3)
{
	$date=strtotime("+100days",time());
	setcookie("quantity3",$quantity, $date);
	header('Location:shoppingcart.php');
}



?>