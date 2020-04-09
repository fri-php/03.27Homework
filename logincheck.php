<?php
session_start();

$uid="ben";
$upwd="ben";
 
$id=$_POST["id"];
$pwd=$_POST["pwd"];

if($id==$uid && $pwd==$upwd)
	{
		$_SESSION["login"]="s";
		$_SESSION["ID"]=$id; 

		$date = strtotime("+7 days",time());
	    setcookie("ID",$_SESSION["ID"],$date);
		
		header('Location:catalog.php');
	}	
else
	{
		$_SESSION["login"]="f";
		header('Location:fail.php');
	}
?>