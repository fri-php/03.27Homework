<?php
session_start();

ob_start();

$item=$_POST["item"];
$quantity=$_POST["quantity"];

$_SESSION["item"]=$item;
$_SESSION["quantity"]=$quantity;
$date=strtotime("+360 days",time());


if($_SESSION["item"]=="迷彩長袖帽T - NT$699"){
 if(isset($_SESSION["quantity"])){

    setcookie("item1",$_SESSION["item"],$date);
    setcookie("quantity1",$_SESSION["quantity"],$date);
   } 
}  

if($_SESSION["item"]=="極致黑合身縮口長褲 - NT$650"){
 if(isset($_SESSION["quantity"])){

    setcookie("item2",$_SESSION["item"],$date);
    setcookie("quantity2",$_SESSION["quantity"],$date);
   } 
}

if($_SESSION["item"]=="KSA Logo 籃球長襪 - NT$199"){
 if(isset($_SESSION["quantity"])){

    setcookie("item3",$_SESSION["item"],$date);
    setcookie("quantity3",$_SESSION["quantity"],$date);
   } 
}

if($_SESSION["item"]=="''我沒事啦''血漬白色T恤 - NT$499"){
 if(isset($_SESSION["quantity"])){

    setcookie("item4",$_SESSION["item"],$date);
    setcookie("quantity4",$_SESSION["quantity"],$date);
   } 
}

if($_SESSION["item"]=="兩件式透氣運動束褲 - NT$899"){
 if(isset($_SESSION["quantity"])){

    setcookie("item5",$_SESSION["item"],$date);
    setcookie("quantity5",$_SESSION["quantity"],$date);
   } 
}

if($_SESSION["item"]=="紳士白襯衫(附黑領結) - NT$699"){
 if(isset($_SESSION["quantity"])){

    setcookie("item6",$_SESSION["item"],$date);
    setcookie("quantity6",$_SESSION["quantity"],$date);
   } 
}

header("Location:shopping.php");
?>