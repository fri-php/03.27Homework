<?php

$id=$_GET["id"];
if($id=="1"){
	setcookie("ITEM001", "",time()-1);
}
if($id=="2"){
	setcookie("ITEM002", "",time()-1);
}
if($id=="3"){
	setcookie("ITEM003", "",time()-1);
}
if($id=="4"){
	setcookie("ITEM004", "",time()-1);
}
header('Location:shoppingcart.php');
?>