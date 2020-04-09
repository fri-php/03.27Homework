<?php
ob_start();
session_start();

$uid="Den0601";
$upwd="12345";

$id=$_POST["id"];
$pwd=$_POST["pwd"];
if($uid==$id && $upwd==$pwd){
$_session["login"]="L";
$_session["ID"]=$id;
	header('Location:catalog.php');
}
else{
	$_session["login"]="F";
    header('Location:login.php');
}

?>