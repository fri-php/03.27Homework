<?php
ob_start();
session_start();

$item=$_POST["item"];
$number=$_POST["number"];

$_SESSION["item"]=$item;
$_SESSION["number"]=$number;
$date=strtotime("+30 days",time());

if($_SESSION["item"]=="tablet")
{
 if(isset($_SESSION["number"]))
 {
 setcookie("item",$_SESSION["item"],$date);
 setcookie("number",$_SESSION["number"],$date);
 }
}

if($_SESSION["item"]=="iphone")
{
 if(isset($_SESSION["number"]))
 {
 setcookie("item1",$_SESSION["item"],$date);
 setcookie("number",$_SESSION["number"],$date);
 }
}

if($_SESSION["item"]=="notebook")
{
 if(isset($_SESSION["number"]))
 {
 setcookie("item2",$_SESSION["item"],$date);
 setcookie("number",$_SESSION["number"],$date);
 }
}
header('Location:cart.php');
?>