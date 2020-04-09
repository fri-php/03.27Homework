<?php
session_start()
if(isset($_session_["ID"])
	$ID=$_session_["ID"]
	$goods=$_session_["goods"]
	$price=$_session_["price"]
    $Quantity=$_session_["Quantity"]
  
    setcookie($ID."[ID]",$ID,time()+3000);
    setcookie($ID."[goods]",$goods,time()+3000)
    setcookie($ID."[price]"),$price,time()+3000)
    setcookie($ID."[Quantity]"),$Quantity,time()+3000)
header("location:'shoppingcart.php');
?>