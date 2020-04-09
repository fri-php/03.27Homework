<?php
$id="gg";
$pwd="12345";

$uid=$_POST["id"];
$upwd=$_POST["pwd"];

if($uid==$id && $upwd==$pwd){
$_SESSION["login"]="YES";
	header('Location:catalog.php');
}else{
	header('Location:login.php');
}




  ?>