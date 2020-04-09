<?php
session_start();
ob_start();
$id="tom";
$pwd="777";

$uid=$_POST["id"];
$upwd=$_POST["pwd"];

if($uid==$id && $upwd==$pwd)
 {
 	$_SESSION["logna"]="yy";
 	$date=strtotime("+10 days",time());
 	setcookie("lognam",$uid,$date);
 	header('Location:catalog.php'); 	
 }
 	else{
 		$_SESSION["logina"]="nn";
 		 header('Location:login.php');	}


?>