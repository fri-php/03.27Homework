<?php
ob_start();
session_start();

if(isset($_SESSION["number"])){
    $number = $_session["number"];
    $name = $_session["name"];
    $price = $_session["price"];
    $quantity = $_session["quantity"];

    setcookie($number."[number]",$number,time()+3600);
    setcookie($number."[name]",$name,time()+3600);
    setcookie($number."[price]",$price,time()+3600);
    setcookie($number."[quantity]",$quantity,time()+3600);
}

header("Location: shoppingcart.php");

?>