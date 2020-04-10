<?php

session_start();

$product=$_POST["product"];
$number=$_POST["number"];
$_SESSION["product"]=$product;
$_SESSION["number"]=$number;

if($_SESSION["product"]=="product1"){
	if (isset($_SESSION["number"])){
		setcookie("PRODUCT1",$_SESSION["product"],time()+3600);
		setcookie("NUMBER1",$_SESSION["number"],time()+3600);
	}
}

if($_SESSION["product"]=="product2"){
	if (isset($_SESSION["number"])){
		setcookie("PRODUCT2",$_SESSION["product"],time()+3600);
		setcookie("NUMBER2",$_SESSION["number"],time()+3600);
	}
}
if($_SESSION["product"]=="product3"){
	if (isset($_SESSION["number"])){
		setcookie("PRODUCT3",$_SESSION["product"],time()+3600);
		setcookie("NUMBER3",$_SESSION["number"],time()+3600);
	}
}
if($_SESSION["product"]=="product4"){
	if (isset($_SESSION["number"])){
		setcookie("PRODUCT4",$_SESSION["product"],time()+3600);
		setcookie("NUMBER4",$_SESSION["number"],time()+3600);
	}
}
if($_SESSION["product"]=="product5"){
	if (isset($_SESSION["number"])){
		setcookie("PRODUCT5",$_SESSION["product"],time()+3600);
		setcookie("NUMBER5",$_SESSION["number"],time()+3600);
	}
}

header('Location:catalog.php');

?>