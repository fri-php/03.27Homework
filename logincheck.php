<?php
session_start();
ob_start();

$id="ian";
$pwd="891026";

$uid=$_POST["id"];
$upwd=$_POST["pwd"];

if($uid==$id && $upwd==$pwd)
{
	$_SESSION["login"]="Yes";
	$date = strtotime("+100 days", time());
    setcookie("loginname", $uid, $date);

	header('location:catalog.php');
}
else
{
	$_SESSION["login"]="No";
	header('location:login.php');
}

?>