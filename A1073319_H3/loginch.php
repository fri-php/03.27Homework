<?php
$account="alex";
$pwd="alexpan456";
$upwd=$_POST["pwd"];
$uaccount=$_POST["account"];
session_start();
if($uaccount==$account && $upwd==$pwd){
    $_SESSION["login"]="yes";
    $date = strtotime("+100 days",time());
    setcookie("loginname",$uaccount,$date);
    header('Location:success.php');
}
else{
    $_SESSION["login"]="no";
    header('Location:fail.php');
}




?>