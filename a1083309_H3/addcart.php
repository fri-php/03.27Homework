<?php
ob_start();
session_start();
$item = $_POST["item"];
$amount = $_POST["amount"];

$_SESSION["item"]=$item;
$_SESSION["amount"]=$amount;
$date=strtotime("+60 days",time());


if($_SESSION["item"]=="dildo"){
	
	setcookie("first",$_SESSION["item"]);
	setcookie("amount",$_SESSION["amount"]);
}

if($_SESSION["item"]=="pigsex"){

	setcookie("second",$_SESSION["item"]);
	setcookie("amount2",$_SESSION["amount"]);


}

if ($_SESSION["item"]=="pooper"){
	
	setcookie("third",$_SESSION["item"]);
	setcookie("amount3",$_SESSION["amount"]);
}

header('Location:catalog.php');


























?>





