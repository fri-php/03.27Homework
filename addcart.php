<?php
session_start();
$_SESSION["item"]=$_POST["item"];
$_SESSION["quantity"]=$_POST["quantity"];
$date=strtotime("+1 days",time());

if($_SESSION["item"]=="10吋平板" && $_SESSION["quantity"]>0)
{
	setcookie("item1",$_SESSION["item"],$date);
	setcookie("quantity1",$_SESSION["quantity"],$date);
}

if($_SESSION["item"]=="15.6吋筆電" && $_SESSION["quantity"]>0)
{
	setcookie("item2",$_SESSION["item"],$date);
	setcookie("quantity2",$_SESSION["quantity"],$date);
}

if($_SESSION["item"]=="iphone" && $_SESSION["quantity"]>0)
{
	setcookie("item3",$_SESSION["item"],$date);
	setcookie("quantity3",$_SESSION["quantity"],$date);
}

header('Location:catalog.php');
?>