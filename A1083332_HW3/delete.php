<?php
session_start();

$a=$_POST["a"];
$b=$_POST["b"];
$c=$_POST["c"];

if($a=="delete")
{
	setcookie("s001","",time()-3600*24);
	
}

if($b=="delete")
{
	setcookie("s002","",time()-3600*24);
	
}

if($c=="delete")
{
	setcookie("s003","",time()-3600)*24;
	
}
header('Location:shoppingcart.php');
?>