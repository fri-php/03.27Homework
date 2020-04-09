<?php

$first=$_POST["chi"];
$second=$_POST["duk"];
$third=$_POST["cur"];

if ($first==delete) {
	setcookie("Itemchi", "", time()-"10days");
	setcookie("numberchi", "", time()-"10days");
}
if ($second==delete) {
	setcookie("Itemduk", "", time()-"10days");
	setcookie("numberduk", "", time()-"10days");
}
if ($third==delete) {
	setcookie("Itemcurry", "", time()-"10days");
	setcookie("numbercur", "", time()-"10days");
}
header('Location:cart.php')
?>