<?php
session_start();

$id="allen";
$pwd="1104";

$uid=$_POST["id"];
$upwd=$_POST["pwd"];

if($uid==$id && $upwd==$pwd){
	$_SESSION["login"]="Yes";
	$date=strtotime("+100 days",time());
	setcookie("loginName", $uid,$date);
	header('Location:success.php');
}
else{
	$_SESSION["login"]="No";
	header('Location:fail.php');
}
?>