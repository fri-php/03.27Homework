<?php
session_start();
ob_start();
$id=$_POST["id"];
$pwd=$_POST["pwd"];
$uid="crispy";
$upwd=family;

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
	echo "Login Failed, <br/> Returns to login page in 3 seconds......";
	echo "<meta http-equiv='Refresh' content='3;URL=login.php'>";

}

?>


