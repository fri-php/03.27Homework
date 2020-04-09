<?php 

$_date=strtotime("+100 days",time());
$del=$_GET["del"];
if ($del==1) 
{
	setcookie("buy1","",time()-3600);
	setcookie("num1","",time()-3600);
}
elseif ($del==2) 
{
	setcookie("buy2","",time()-3600);
	setcookie("num2","",time()-3600);
}
elseif ($del==3) 
{
	setcookie("buy3","",time()-3600);
	setcookie("num3","",time()-3600);
}
elseif ($del==4) 
{
	setcookie("buy4","",time()-3600);
	setcookie("num4","",time()-3600);
}
elseif ($del==5) 
{
	setcookie("buy5","",time()-3600);
	setcookie("num5","",time()-3600);
}
header('Location: cart.php');
 ?>