<?php
ob_start();
session_start();
$uid="jay";
$upwd="a0984285151";

$id=$_POST["id"];
$pwd=$_POST["pwd"];

if($uid==$id && $upwd==$pwd){
	$_SESSION["login"]="YES";
	header('Location:catalog.php');
}else{
	$_SESSION["login"]="NO";
	header('Location:buylogin.php');
}
			
?>