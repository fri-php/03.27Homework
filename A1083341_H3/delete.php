<?php
session_start();
ob_start();

if(isset($_POST["1"]))
{
	$_SESSION["number1"]=0;
}
if(isset($_POST["2"]))
{
	$_SESSION["number2"]=0;
}
if(isset($_POST["3"]))
{
	$_SESSION["number3"]=0;
}

header('Location:shoppingcart.php');
?>