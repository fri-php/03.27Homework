<?php

session_start();

$product=$_POST["product"];
$number=$_POST["number"];

if ($product=="1") 
{
 setcookie("阿呆的奶茶",$number,time()+3600*12);
}
if ($product=="2") 
{
 setcookie("阿呆的薯條",$number,time()+3600*12);
}
if ($product=="3")
{
 setcookie("阿瓜的小孩頭",$number,time()+3600*12);
}
if ($product=="4")
{
 setcookie("阿傻的微積分作業",$number,time()+3600*12);
}
if ($product=="5")
{
 setcookie("阿笨的錢包",$number,time()+3600*12);
}
if ($product=="6")
{
 setcookie("阿笨的酒精",$number,time()+3600*12);
}

header("location:shoppingcart.php");



?>