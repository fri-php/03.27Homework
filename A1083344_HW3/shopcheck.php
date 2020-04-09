<?php
session_start();
ob_start();
$id="kk";
$pwd="qwert";

$uid=$_POST["i"];
$upwd=$_POST["pwd"];

if($id==$uid && $pwd==$upwd)
{
	$_SESSION["login"]="Yes";
	header('Location:catalog.php');
	$date=strtotime("+1000 days",time());
	setcookie("LoginName",$uid,$date);
}
else
{
	$_SESSION["login"]="No";
	header('Location:shoplogin.php');
}


?>