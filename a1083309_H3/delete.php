<?php

$i=$_POST["tb"];
$t=$_POST["ip"];
$m=$_POST["nc"];


if($i=="刪除"){
setcookie("first","",time()-1);
setcookie("amount","",time()-1);
}

if($t=="刪除"){
setcookie("second","",time()-1);
setcookie("amount2","",time()-1);
}

if($m=="刪除"){
setcookie("third","",time()-1);
setcookie("amount3","",time()-1);
}

header('Location:cart.php');
?>