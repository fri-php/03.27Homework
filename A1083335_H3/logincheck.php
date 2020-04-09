<?php

$id="sherry";
$pwd="12345";


$uid=$_POST["id"];
$upwd=$_POST["pwd"];

if($uid==$id && $upwd==$pwd){
	$_SESSION["login"]="Yes";

	$date= strtotime("+100 days", time());
	setcookie("loginName", $uid, $date);

	header('Location:catalog.php');
}else{
	$_SESSION["login"]="No";

	header('Location:login.php');
}
?>

