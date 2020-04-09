<?php

$_date=strtotime("+50 days",time());
$de=$_GET["de"];
if ($de==1)
{
	setcookie("buy1","",time()-3000);
	setcookie("num1","",time()-3000);
}

if ($de==2)
{
	setcookie("buy2","",time()-3000);
	setcookie("num2","",time()-3000);
}

if ($de==3)
{
	setcookie("buy3","",time()-3000);
	setcookie("num3","",time()-3000);
}
header('Location: cart.php');
?>

