<?php

session_start();

if($_SESSION["login"]!="true")
	header("location:login.php?err=2");

setcookie("S".$_GET["id"], "", time()-3600);
header("location:shoppingcart.php");

?>