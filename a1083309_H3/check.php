<?php
session_start();
ob_start();
$id = "homer";
$pwd = "ilove60217";

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
    header('Location:fail2.php');
}
?>