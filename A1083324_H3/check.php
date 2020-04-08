<?php

session_start();

$id="yellow";
$pwd="0621";

$uid=$_POST["id"];
$upwd=$_POST["pwd"];

if($id==$uid && $pwd==$upwd){
	$_SESSION["login"]="Yes";


	header('Location:catalog.php');



}
else{
	$_SESSION["login"]="No";

	header("Location:login.php");
}


?>
