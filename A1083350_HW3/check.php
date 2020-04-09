<?php
session_start();
ob_start();

	$id=$_POST["id"];
	$pwd=$_POST["pwd"];

	$uid="a1083350";
	$upwd="123456";

	if ($id==$uid && $pwd==$upwd) {
		$_SESSION["login"]="Yes";
		$date=strtotime("+100 days", time());
		setcookie("LoginName", $uid, $date);
		header("Location:success.php");
		//ob_flush();
	}else{
		$_SESSION["login"]="No";
		header('Location:fail.php');
	}
?>