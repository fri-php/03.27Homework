
<?php
session_start();
ob_start();

$id="kluma9038";
$pwd="jack900308";

$userid=$_POST["id"];
$userpwd=$_POST["pwd"];

if($userid==$id && $userpwd==$pwd){
	$_SESSION["login"]="Yes";
	

	$date=strtotime("+100 days",time());
	setcookie("loginName", $userid, $date);

	header('Location:success.php');
	ob_flush();
}
else{
	$_SESSION["login"]="No";
	header('Location:fail.php');
}



?>