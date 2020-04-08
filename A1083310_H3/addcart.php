<?php 


$num=$_POST["number"];
$goods=$_POST["goods"];

$nog=$_COOKIE["goods_g"];
$noca=$_COOKIE["goods_ca"];
$noch=$_COOKIE["goods_ch"];

$date=strtotime("+100 days",time());

if ($goods=="gummy") {
	$nog=$nog+$num;
	setcookie("goods_g",$nog,$date);}

if ($goods=="candy") {
	$noca=$noca+$num;
	setcookie("goods_ca",$noca,$date);}

if ($goods=="chocolate") {
	$noch=$noch+$num;
	setcookie("goods_ch",$noch,$date);}

header('location:catalog.php');

 ?>