<?php 

$_date=strtotime("+100 days",time());
$de=$_GET["de"];
if ($de==1) 
{
	setcookie("buy1","",time()-3600);
	setcookie("num1","",time()-3600);
}
elseif ($de==2) 
{
	setcookie("buy2","",time()-3600);
	setcookie("num2","",time()-3600);
}
elseif ($de==3) 
{
	setcookie("buy3","",time()-3600);
	setcookie("num3","",time()-3600);
}
elseif ($de==4) 
{
	setcookie("buy4","",time()-3600);
	setcookie("num4","",time()-3600);
}
elseif ($de==5) 
{
	setcookie("buy5","",time()-3600);
	setcookie("num5","",time()-3600);
}
header('Location: cart.php');
 ?>