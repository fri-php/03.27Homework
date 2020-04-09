<?php

$del=$_GET["del"];

if ($del==1) 
{
	setcookie("number1","",time()-50);
	setcookie("goods1","",time()-50);
}

if ($del==2) 
{
	setcookie("number2","",time()-50);
	setcookie("goods2","",time()-50);
}

if ($del==3) 
{
	setcookie("number3","",time()-50);
	setcookie("goods3","",time()-50);
}

if ($del==4) 
{
	setcookie("number4","",time()-50);
	setcookie("goods4","",time()-50);
}

header('Location: cart.php');

?>
