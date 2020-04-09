<?php

session_start();

$uid="A1083345";
$upwd="1234";

if($_POST["id"]==$uid && $_POST["pwd"]==$upwd)
{
	$_SESSION["login"]="true";
	header("location:catalog.php");
}
else
{
	$_SESSION["login"]="false";
	header("location:login.php?err=1");
}

?>