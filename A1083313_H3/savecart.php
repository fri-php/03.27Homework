<?php
session_start();
$item=$_POST["item"];
$num=$_POST["num"];
$_SESSION["item"]=$item;
$_SESSION["num"]=$num;
$date=strtotime("+100 days",time());

if($_SESSION["item"]=="S001"){
	if(isset($_SESSION["num"])){
		setcookie("ITEM001", $_SESSION["item"],$date);
		setcookie("NUM001", $_SESSION["num"],$date);}
}
if($_SESSION["item"]=="S002"){
	if(isset($_SESSION["num"])){
		setcookie("ITEM002", $_SESSION["item"],$date);
		setcookie("NUM002", $_SESSION["num"],$date);}
}
if($_SESSION["item"]=="S003"){
	if(isset($_SESSION["num"])){
		setcookie("ITEM003", $_SESSION["item"],$date);
		setcookie("NUM003", $_SESSION["num"],$date);}
}
if($_SESSION["item"]=="S004"){
	if(isset($_SESSION["num"])){
		setcookie("ITEM004", $_SESSION["item"],$date);
		setcookie("NUM004", $_SESSION["num"],$date);}
}
header('Location:catalog.php');

?>
