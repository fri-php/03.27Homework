<?php
session_start();
$number=$_POST["number"];
$product=$_POST["product"];
if($product=="a1000"){
	setcookie("10吋變形平板",$number,time()+3600*6);
}
if($product=="a1001"){
	setcookie("15吋筆記型電腦",$number,time()+3600*6);
}
if($product=="a1002"){
	setcookie("iPhone手機",$number,time()+3600*6);
}
header("location:shoppingcart.php");
?>