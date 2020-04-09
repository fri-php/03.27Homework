
<?php

session_start();

$item=$_POST["item"];
$quantity=$_POST["quantity"];
$_SESSION["item"]=$item;
$_SESSION["quantity"]=$quantity;


if ($_SESSION["item"]=="S001") {
	if (isset($_SESSION["quantity"])) {
		setcookie("ITEM001",$_SESSION["item"],time()+3600);
		setcookie("QUANTITY001",$_SESSION["quantity"],time()+3600);
	}
}

if ($_SESSION["item"]=="S002") {
	if (isset($_SESSION["quantity"])) {
		setcookie("ITEM002",$_SESSION["item"],time()+3600);
		setcookie("QUANTITY002",$_SESSION["quantity"],time()+3600);
	}
}

if ($_SESSION["item"]=="S003") {
	if (isset($_SESSION["quantity"])) {
		setcookie("ITEM003",$_SESSION["item"],time()+3600);
		setcookie("QUANTITY003",$_SESSION["quantity"],time()+3600);
	}
}



header("Location: shoppingcart.php");

?>