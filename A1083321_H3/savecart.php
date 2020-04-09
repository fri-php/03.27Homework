<?php
session_start();
$product=$_POST["product"];
$customer=$_POST["customer"];
$number=$_POST["number"];

if ($product=="s1001") 
{
	setcookie("小孩頭米餅",$number,time()+3600*12);
}
if ($product=="s1002") 
{
	setcookie("小孩頭麵線",$number,time()+3600*12);
}
if ($product=="s1003")
{
	setcookie("小孩頭手機架",$number,time()+3600*12);
}
header("location:shoppingcart.php")
?>