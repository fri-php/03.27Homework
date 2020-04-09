<html>
<?php

session_start();

$item=$_POST["goods"];
$quantity=$_POST["quantity"];
$_SESSION["goods"]=$item;
$_SESSION["quantity"]=$quantity;

$date=strtotime("+100 days",time());

if ($_SESSION["goods"]=="computer") 
{
	if (isset($_SESSION["quantity"])) 
	{
		setcookie("computer",$_SESSION["goods"],$date);
		setcookie("q1",$_SESSION["quantity"],$date);
	}
}

if ($_SESSION["goods"]=="phone") 
{
	if (isset($_SESSION["quantity"])) 
	{
		setcookie("phone",$_SESSION["goods"],$date);
		setcookie("q2",$_SESSION["quantity"],$date);
	}
}

if ($_SESSION["goods"]=="telephone") 
{
	if (isset($_SESSION["quantity"])) 
	{
		setcookie("telephone",$_SESSION["goods"],$date);
		setcookie("q3",$_SESSION["quantity"],$date);
	}
}
header("Location: shoppingcart.php");
?>
</html>