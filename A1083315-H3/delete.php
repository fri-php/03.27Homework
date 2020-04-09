<?php

session_start();

$c=$_POST["cf"];
$b=$_POST["bp"];
$k=$_POST["ks"];
$i=$_POST["it"];
$t=$_POST["tb"];
$g=$_POST["gb"];

if($c=="移除"){
  setcookie("item1","",time()-3600);
  setcookie("quantity1","",time()-3600);
}

if($b=="移除"){
  setcookie("item2","",time()-3600);
  setcookie("quantity2","",time()-3600);
}

if($k=="移除"){
  setcookie("item3","",time()-3600);
  setcookie("quantity3","",time()-3600);
}

if($i=="移除"){
  setcookie("item4","",time()-3600);
  setcookie("quantity4","",time()-3600);
}

if($t=="移除"){
  setcookie("item5","",time()-3600);
  setcookie("quantity5","",time()-3600);
}

if($g=="移除"){
  setcookie("item6","",time()-3600);
  setcookie("quantity6","",time()-3600);
}

header("Location:shopping.php");

?>