<?php
session_start();
ob_start();

$id="kevin";
$pwd="12345";

$uid=$_POST["id"];
$upwd=$_POST["pwd"];

if($uid==$id && $upwd==$pwd){
    $_SESSION["login"]="Yes";
    $date = strtotime("+100 days", time());
    setcookie("loginName", $uid, $date);
    header('Location:success.php');
    ob_flush();
}else{
    $_SESSION["login"]="No";
    header('Location:fail.php');
}



?>