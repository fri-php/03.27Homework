<?php
session_start();

$uid="henry";
$upwd="12345";

$id=$_POST["id"];
$pwd=$_POST["pwd"];

if ($uid==$id && $upwd==$pwd) {
	$_SESSION["login"]="S";
	header('Location:catalog.php');
} else {
	$_SESSION["login"]="F";
	header('Location:catalog.php');
}
