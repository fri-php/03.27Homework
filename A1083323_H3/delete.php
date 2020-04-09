<?php
if (isset($_POST["1"])) 
{
	setcookie("金萱雙Q","",time()-3600*2);
}
if (isset($_POST["2"])) 
{
	setcookie("沖繩鮮奶茶","",time()-3600*2);
}
if (isset($_POST["3"])) 
{
	setcookie("古早味紅茶","",time()-3600*2);
}

header("location:shoppingcart.php");
?>          