<?php
session_start();
$product=$_POST["product"];
$number=$_POST["number"];

if ($product==a001) 
{
	setcookie("金萱雙Q",$number,time()+3600*2);
}
if ($product==a002) 
{
	setcookie("沖繩鮮奶茶",$number,time()+3600*2);
}
if ($product==a003) 
{
	setcookie("古早味紅茶",$number,time()+3600*2);
}

header("location:shoppingcart.php");
?>