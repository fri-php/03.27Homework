<?php
if(isset($_POST["a"])){
	setcookie("10吋變形平板","",time()-3600*6);
}
if(isset($_POST["b"])){
	setcookie("15吋筆記型電腦","",time()-3600*6);
}
if(isset($_POST["c"])){
	setcookie("iPhone手機","",time()-3600*6);
}
header("location:shoppingcart.php");
?>