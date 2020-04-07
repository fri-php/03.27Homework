<?php
session_start();
ob_start();

$id="a1083301";
$pwd="12345678";

$uid=$_POST["id"];
$upwd=$_POST["pwd"];

if($uid==$id && $upwd==$pwd)
{
	$_SESSION["login"]="Yes";
	$date=strtotime("+100 days",time());
	setcookie("loginName",$uid, $date);
	header('Location:(shoppingcar)success.php');
	//ob_flush();
}
else
{
	$_SESSION["login"]="No";
	header('Location:(shoppingcar)fail.php');
}

?>