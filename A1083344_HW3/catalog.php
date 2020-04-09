<?php
session_start();
if(isset($_SESSION["login"]))
{
	echo "welcome";
}
else
{
	header('location:shoplogin.php');
}
?>

<form action="savecart.php" method="POST">
<h4>what do you want<br/></h4>
	<select name="Item">
	<option value="1">100kg的花生米 </option>
	<option value="2">150kg的蓮霧</option>
	<option value="3">200kg的上好芭樂</option></select><br/>
	how many?<input type="number" name="Quantity">
	<input type="submit" value="ok"><br/>
	<a href="shoppingcart.php">查看購物車</a>
</form>
