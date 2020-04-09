<?php
session_start();
ob_start();
$id = "jamea2009";
$pwd = "jkloi579357";

$uid = $_POST["id"];
$upwd = $_POST["pwd"];

if($uid == $id && $upwd == $pwd){
    $_SESSION["login"]="Yes";
    header('Location:catalog.php');
    $date = strtotime("+10 days",time());
    setcookie("Loginname",$uid,$date);
    ob_flush();

}
else{
    $_SESSION["login"]="No";
    header('Location:shoplog.php');
}
?>