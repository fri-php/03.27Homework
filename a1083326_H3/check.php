<?php
session_start()
$id="derrick";
$pwd="12345";

$uid=$_POST["id"];
$upwd=$_POST["pwd"];

if($uid==$id && $upwd==$pwd){
	$_SESSION["login"]="yes";
header('Location:catalog.php');
}else{
	$_SESSION{"login"}="no";
	exit;
}
?>