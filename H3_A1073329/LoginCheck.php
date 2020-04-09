<?php
session_start();
ob_start();
$id = "brian";
$pwd = "0805";

$uid = $_POST["id"];
$upwd = $_POST["pwd"];

if($uid == $id && $upwd == $pwd){
    $_SESSION["login"]="YES";
    header('Location:catalog.php');
    $date = strtotime("+10 days",time());
    setcookie("Loginname",$uid,$date);
    ob_flush();

}
else{
    $_SESSION["login"]="NO";
    header('Location:fail.php');
}
?>