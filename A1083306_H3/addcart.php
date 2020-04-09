<?php

$_date=strtotime("+30 days",time());
setcookie("totol",$totol,$date);
$number=$_POST["number"];
$item=$_POST["item"];
if ($item=="item1")
{
	setcookie("number1",$number,$date);
	setcookie("item1","0",$date);
	
}
if ($item=="item2") 
{
	setcookie("number2",$number,$date);
	setcookie("item2","0",$date);
	
}
if($item=="item3") 
{
	setcookie("number3",$number,$date);
	setcookie("item3","0",$date);
	
}
if($item=="item4") 
{
	setcookie("number4",$number,$date);
	setcookie("item4","0",$date);
	
}

header('Location: catalog.php');
?>




