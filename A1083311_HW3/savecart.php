<?php
ob_start();
session_start();

$item=$_POST["item"];
$quantity=$_POST["quantity"];

$_SESSION["item"]=$item;
$_SESSION["quantity"]=$quantity;
$date=strtotime("+30 days",time());

if ($_SESSION["item"]=="tablet") {
	if (isset($_SESSION["quantity"])) {
		setcookie("item1",$_SESSION["item"],$date);
		setcookie("quantity1",$_SESSION["quantity"],$date);
	}
}
if ($_SESSION["item"]=="iphone") {
	if (isset($_SESSION["quantity"])) {
		setcookie("item2",$_SESSION["item"],$date);
		setcookie("quantity2",$_SESSION["quantity"],$date);
	}
}
if ($_SESSION["item"]=="notebook") {
	if (isset($_SESSION["quantity"])) {
		setcookie("item3",$_SESSION["item"],$date);
		setcookie("quantity3",$_SESSION["quantity"],$date);
	}
}
header('Location:shoppingcart.php');
?>