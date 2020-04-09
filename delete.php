<?php

$i=$_POST["tb"];
$t=$_POST["ip"];
$m=$_POST["nc"];


if($i=="刪除"){
setcookie("item","",time()-1);
setcookie("number","",time()-1);
}

if($t=="刪除"){
setcookie("item1","",time()-1);
setcookie("number1","",time()-1);
}

if($m=="刪除"){
setcookie("item2","",time()-1);
setcookie("numbeer2","",time()-1);
}

header('Location:shoppingcart.php');
?>