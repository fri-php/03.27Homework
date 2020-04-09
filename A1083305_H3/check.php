<?php
session_start();
$id="Erica";
$pwd="121212";
$uid=$_POST["id"];
$upwd=$_POST["pwd"];

if($uid==$id && $upwd==$pwd){
	$_SESSION["login"]="Yes";
	header('Location:catalog.php');
}
else{
	$_SESSION["login"]="No";
	header('Location:fail.php');
}
?>