<?php
session_start();
if(isset($_POST["1"]))
{
	setcookie("ID1","",time()-36000);
	setcookie("Name1","",time()-36000);
	setcookie("Price1","",time()-36000);
	setcookie("Quantity1","",time()-36000);
}
else if(isset($_POST["2"]))
{
	setcookie("ID2","",time()-36000);
	setcookie("Name2","",time()-36000);
	setcookie("Price2","",time()-36000);
	setcookie("Quantity2","",time()-36000);
}
else if(isset($_POST["3"]))
{
	setcookie("ID3","",time()-36000);
	setcookie("Name3","",time()-36000);
	setcookie("Price3","",time()-36000);
	setcookie("Quantity3","",time()-36000);
}
header("Location:shoppingcart.php");
?>