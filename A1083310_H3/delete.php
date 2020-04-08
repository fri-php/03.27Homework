<?php 


if ($_GET["del"]==1) 
	setcookie("goods_g","",time()-"100 days");
if ($_GET["del"]==2) 
	setcookie("goods_ca","",time()-"100 days");
if ($_GET["del"]==3) 
	setcookie("goods_ch","",time()-"100 days");

	unset($_GET["del"]);

header('location:cart.php');
 ?>