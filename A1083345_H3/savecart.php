<?php

session_start();

if($_SESSION["login"]!="true")
	header("location:login.php?err=2");

setcookie($_POST["item"], $_POST["quantity"], time()+3600);
header("location:shoppingcart.php")

?>