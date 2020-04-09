<?php
session_start();
ob_start(); //啟用輸出緩衝區

$id="gordon";
$pwd="12345";

$uid=$_POST["id"]; //$_POST:取得欄位資料
$upwd=$_POST["pwd"];

if($uid==$id && $upwd==$pwd)
{
	$_SESSION["login"]="Yes"; //儲存目前PHP程式Session變數的結合陣列

	$date=strtotime("+100 days",time());
	setcookie("loginName",$uid, $date); //setcookie()函數新增Cookie
	header('Location:catalog.php');
	//ob_flush();
}
else
{
	$_SESSION["login"]="No";

	header('Location:shoplogin.php');
}

?>