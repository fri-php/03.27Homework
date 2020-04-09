<?php
session_start();
ob_start();
$id=$_POST["id"];
$pwd=$_POST["pwd"];
$uid="a1073352";
$upwd=12345;

if ($uid==$id && $upwd==$pwd) 
{
	$_SESSION["login"]="Yes";
	header('Location: catalog.php');
	$_date=strtotime("+100 days",time());
	setcookie("logname",$uid,$date);
}
else
{
	$_SESSION["login"]="No";
	echo "登入失敗，跳轉至首頁";
	echo "<meta http-equiv='Refresh' content='3;URL=login.php'>";

}

?>