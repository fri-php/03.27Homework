<?php
ob_start();
session_start();
$id="a1083311";
$pwd="123456";

$uid=$_POST["id"];
$upwd=$_POST["pwd"];

if($uid==$id && $upwd==$pwd)
{
	$_SESSION["login"]="Yes";
	$date=strtotime("+7 days",time());
	setcookie("loginName",$uid,$date);
	header('Location:catalog.php');

}
else
{
	$_SESSION["login"]="No";
	header('Location:fail(hw).php');
}

?>