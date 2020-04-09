<?php
ob_start();
session_start();

$goodsx=$_POST["goods"];
$numx=$_POST["num"];
$x1="com";
$x2="tv";
$x3="ele";
$date=strtotime("+10 days",time());

if ($goodsx=="com") {
  	 setcookie("goods1",$numx,$date);
  	 header('Location:catalog.php'); 
}

if ($goodsx=="tv") {
   
  	 setcookie("goods2",$numx,$date);
  	 header('Location:catalog.php');
  }

if ($goodsx=="ele") 
  {
  	 setcookie("goods3",$numx,$date);
  	 header('Location:catalog.php');
  }

?>