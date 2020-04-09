<?php
session_start();  
if ( isset($_SESSION["ID"]) ) 
{
   $id = $_SESSION["ID"]; 
   $name = $_SESSION["Name"];
   $price = $_SESSION["Price"];
   $quantity = $_SESSION["Quantity"];   
   
   setcookie($id."[ID]", $id, time()+1800);
   setcookie($id."[Name]", $name, time()+1800);
   setcookie($id."[Price]", $price, time()+1800);
   setcookie($id."[Quantity]", $quantity, time()+1800);
}
eader("Location: cart.php");  
?>