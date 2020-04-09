<?php
session_start();
if($_SESSION["login"]==T){}
else
{
	header('Location:login.php');
}
if(isset($_POST["ID"]))
{
	$_SESSION["num"]=$_POST["num"];
	$ID=$_POST["ID"];
	$_SESSION["ID"]=$ID;
	switch (strtoupper($ID))
	{
		case "S001":
			$_SESSION["name"]="10吋變形平板";
			$_SESSION["price"]="12000";
			break;
		case "S002":
			$_SESSION["name"]="15.6吋筆記型電腦";
			$_SESSION["price"]="27000";
			break;
		case "S003":
			$_SESSION["name"]="iPhone手機";
			$_SESSION["price"]="21000";
			break;
	}
	$ID=$_SESSION["ID"];
	$name=$_SESSION["name"];
	$price=$_SESSION["price"];
	$num=$_SESSION["num"];

	setcookie($ID."[item]",$ID,time()+3600);
	setcookie($ID."[name]",$name,time()+3600);
	setcookie($ID."[price]",$price,time()+3600);
	setcookie($ID."[num]",$num,time()+3600);
}
	
header('Location:catalog.php');

?>