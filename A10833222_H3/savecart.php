<html>
<?php

session_start();

$item=$_POST["item"];
$quantity=$_POST["quantity"];
$_SESSION["item"]=$item;
$_SESSION["quantity"]=$quantity;

$date=strtotime("+100 days",time());

if ($_SESSION["item"]=="a001") 
{
	if (isset($_SESSION["quantity"])) 
	{
		setcookie("ITEM001",$_SESSION["item"],$date);
		setcookie("QUANTITY001",$_SESSION["quantity"],$date);
	}
}

if ($_SESSION["item"]=="a002") 
{
	if (isset($_SESSION["quantity"])) 
	{
		setcookie("ITEM002",$_SESSION["item"],$date);
		setcookie("QUANTITY002",$_SESSION["quantity"],$date);
	}
}

if ($_SESSION["item"]=="a003") 
{
	if (isset($_SESSION["quantity"])) 
	{
		setcookie("ITEM003",$_SESSION["item"],$date);
		setcookie("QUANTITY003",$_SESSION["quantity"],$date);
	}
}



header("Location: shoppingcart.php");

?>
</html>