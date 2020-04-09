<?php
ob_start();
session_start();
$uid="rex12031203";  //user id
$upwd="12345";		//user pwd 
$id=$_POST["id"];
$pwd=$_POST["pwd"];

if($uid==$id && $upwd==$pwd){

	$_SESSION["login"]="Y";
	$date=strtotime("+3600",time());
	setcookie("loginName",$uid,$date);
	header('Location:catalog.php');
}
else
{
	$_SESSION["login"]="N";
	header('Location:login.php');
}
			
?>