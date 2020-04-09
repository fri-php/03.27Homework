<?php
ob_start();
session_start();

$item=$_POST["item"];
$number=$_POST["number"];

$_SESSION["item"]=$item;
$_SESSION["number"]=$number;
$date=strtotime("+30 days",time());

if($_SESSION["item"]=="homer"){
 if(isset($_SESSION["number"])){

setcookie("item",$_SESSION["item"],$date);
setcookie("number",$_SESSION["number"],$date);
   } 
  }

if($_SESSION["item"]=="pig"){
 if(isset($_SESSION["number"])){

setcookie("item1",$_SESSION["item"],$date);
setcookie("number1",$_SESSION["number"],$date);
   } 
  }  


if($_SESSION["item"]=="shuchen"){
 if(isset($_SESSION["number"])){

setcookie("item2",$_SESSION["item"],$date);
setcookie("number2",$_SESSION["number"],$date);
   } 
  }

if($_SESSION["item"]=="dindin"){
 if(isset($_SESSION["number"])){

setcookie("item3",$_SESSION["item"],$date);
setcookie("number3",$_SESSION["number"],$date);
   } 
  }
header('Location:shoppingcart.php');

?>