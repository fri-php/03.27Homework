<?php
session_start();
ob_start();

$item=$_POST["item"];
$number=$_POST["number"];

if($item=="10吋變形平板")
{
	if (isset($_SESSION["number1"])) 
	{
		$_SESSION["number4"]=$number;
		$_SESSION["number1"]=$number+$_SESSION["number1"];
		$_SESSION["item1"]=$item;
		$_SESSION["price1"]=$_SESSION["number1"]*12000;
	}
	else
	{
		$_SESSION["number1"]=$number;
		$_SESSION["item1"]=$item;
		$_SESSION["price1"]=$_SESSION["number1"]*12000;
	}
	
	
}

if($item=="15.6吋筆記型電腦")
{
	if (isset($_SESSION["number2"])) 
	{
		$_SESSION["number5"]=$number;
		$_SESSION["number2"]=$number+$_SESSION["number2"];
		$_SESSION["item2"]=$item;
		$_SESSION["price2"]=$_SESSION["number2"]*27000;
	}
	else
	{
		$_SESSION["number2"]=$number;
		$_SESSION["item2"]=$item;
		$_SESSION["price2"]=$_SESSION["number2"]*27000;
	}
}

if($item=="iPhone手機")
{
	if (isset($_SESSION["number3"])) 
	{
		$_SESSION["number6"]=$number;
		$_SESSION["number3"]=$number+$_SESSION["number3"];
		$_SESSION["item3"]=$item;
		$_SESSION["price3"]=$_SESSION["number3"]*21000;
	}
	else
	{
		$_SESSION["number3"]=$number;
		$_SESSION["item3"]=$item;
		$_SESSION["price3"]=$_SESSION["number3"]*21000;
	}
}

header('Location:catalog.php');
?>