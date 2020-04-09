<?php
session_start();

$uid="id";
$upwd="12345";
$id=$_POST["id"];
$pwd=$_POST["pwd"];

if($uid==$id&&$upwd==$pwd)
{
	$_SESSION["login"]="T";
	header('Location:catalog.php');
}
else
{
	$_SESSION["login"]="F";
	echo "帳號或密碼錯誤<br/>";
	echo "<a href='login.php'>重新登入</a>";
}
?>