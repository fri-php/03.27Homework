<?php
session_start();

if(isset($_POST["one"]))
{
	setcookie("quantityA","", time()-100);
	header('Location:cart.php');
}
if(isset($_POST["two"]))
{
	setcookie("quantityB","", time()-100);
	header('Location:cart.php');
}
if(isset($_POST["three"]))
{
	setcookie("quantityC","", time()-100);
	header('Location:cart.php');
}



?>

   