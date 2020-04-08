<?php
session_start();
/*if(isset($_COOKIE["quantity1"]))
{
	setcookie("quantity1","", time()-3600);
	header('Location:shoppingcart.php');
}
if(isset($_COOKIE["quantity2"]))
{
	setcookie("quantity2","", time()-3600);
	header('Location:shoppingcart.php');
}
if(isset($_COOKIE["quantity3"]))
{
	setcookie("quantity3","", time()-3600);
	header('Location:shoppingcart.php');
}*/

if(isset($_POST["one"]))
{
	setcookie("quantity1","", time()-3600);
	header('Location:shoppingcart.php');
}
if(isset($_POST["two"]))
{
	setcookie("quantity2","", time()-3600);
	header('Location:shoppingcart.php');
}
if(isset($_POST["three"]))
{
	setcookie("quantity3","", time()-3600);
	header('Location:shoppingcart.php');
}



?>