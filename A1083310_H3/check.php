<?php

session_start();

$id="yichen";
$pwd="123456";

$uid=$_POST["id"];
$upwd=$_POST["pwd"];

if ($uid==$id && $upwd==$pwd) {
	
	$_SESSION["login"]="Yes";
	$date=strtotime("+100 days",time());
	setcookie("loginName",$uid,$date);
	header('location:catalog.php');	
}
else{
	header('location:login.php');
	$_SESSION["login"]="No";

}

?>