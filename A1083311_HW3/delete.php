<?php

$t=$_POST["tab"];
$i=$_POST["pho"];
$n=$_POST["note"];

if ($t=="delete") {
	setcookie("item1","",time()-1);
	setcookie("quantity1","",time()-1);
}

if ($i=="delete") {
	setcookie("item2","",time()-1);
	setcookie("quantity2","",time()-1);
}

if ($n=="delete") {
	setcookie("item3","",time()-1);
	setcookie("quantity3","",time()-1);
}
header('Location:shoppingcart.php');
?>