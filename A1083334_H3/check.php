<?php
ob_start();
session_start();

$uid="wyes";
$upwd="CCGSH";

$id=$_POST["id"];
$pwd=$_POST["pwd"];
if($uid==$id && $upwd==$pwd)
{
 $_SESSION["login"]="Yes";
 $_SESSION["ID"]=$id;
 header('Location:success.php');
}
else
{
 $_SESSION["login"]="No";	
 header('Location:fail.php');
};


?>