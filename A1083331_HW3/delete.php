<?php
ob_start();
session_start();

$dg1=$_POST["delete1"];
$dg2=$_POST["delete2"];
$dg3=$_POST["delete3"];


if ($dg1 == "刪除") {
	$date1=strtotime("-10 days",time());
  	 setcookie("goods1","","$date1");
  	 header('Location:shoppingcart.php'); 
}

if ($dg2 == "刪除") {
	$date1=strtotime("-10 days",time());
  	 setcookie("goods2","","$date1");
  	 header('Location:shoppingcart.php'); 
}
if ($dg3 == "刪除") {
	$date1=strtotime("-10 days",time());
  	 setcookie("goods3","","$date1");
  	 header('Location:shoppingcart.php'); 
}




?>