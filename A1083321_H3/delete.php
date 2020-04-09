<?php
if (isset($_POST["a"])) 
{
	setcookie("小孩頭米餅", "", time()-3600*12);
}
if (isset($_POST["b"])) 
{
	setcookie("小孩頭麵線", "", time()-3600*12);
}
if (isset($_POST["c"])) 
{
	setcookie("小孩頭手機架", "", time()-3600*12);
}

header("location:shoppingcart.php");
?>