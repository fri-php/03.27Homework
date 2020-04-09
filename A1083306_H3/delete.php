<?php

$de=$_GET["de"];
if ($de==1)
{
	setcookie("item1","",time()-30);
	setcookie("number1","",time()-30);
}
if ($de==2)
{
	setcookie("item2","",time()-30);
	setcookie("number2","",time()-30);
}
if ($de==3)
{
	setcookie("item3","",time()-30);
	setcookie("number3","",time()-30);
}
if ($de==4)
{
	setcookie("item4","",time()-30);
	setcookie("number4","",time()-30);
}

header('Location:cart.php');

?>