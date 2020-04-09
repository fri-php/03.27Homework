<?php

session_start();

$_SESSION["1"]=$_POST["S001"];
$_SESSION["2"]=$_POST["S002"];
$_SESSION["3"]=$_POST["S003"];

if (isset($_SESSION["1"])) 
{
	setcookie("ITEM001","",time()-1);
	setcookie("QUANTITY001","",time()-1);
}
if (isset($_SESSION["2"])) 
{
	setcookie("ITEM002","",time()-1);
	setcookie("QUANTITY002","",time()-1);
}
if (isset($_SESSION["3"])) 
{
	setcookie("ITEM003","",time()-1);
	setcookie("QUANTITY003","",time()-1);
}

header("Location:shoppingcart.php");

?>
