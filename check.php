<?php
session_start();
$uid=$_POST["uid"]; 
$upwd=$_POST["upwd"];
$id="ray";
$pwd="123456";
if($uid==$id&&$upwd==$pwd){
$_SESSION["login"]="Yes";
$date=strtotime("+100 days",time());
setcookie("cat",$uid,$date);
header('Location:catalog.php');
}else{
$_SESSION["login"]="No";
header('Location:fail.php');
}
?>