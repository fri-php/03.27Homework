<?php
session_start();

$product=$_POST["product"];
$quantity=$_POST["quantity"];

if($product=="ipad")
{
	setcookie("s001",$quantity,time()+3600*24);
}

if($product=="com")
{
	setcookie("s002",$quantity,time()+3600*24);
}

if($product=="cel")
{
	setcookie("s003",$quantity,time()+3600*24);
}

header('Location:shoppingcart.php');
?>