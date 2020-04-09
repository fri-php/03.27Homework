<?php
$ID=$_GET["ID"];
if(isset($_COOKIE["$ID"]))
	while (list($name,$value)=each($_COOKIE["$ID"]))
		setcookie($ID."[$name]","",time()-3600);
header("Location:shoppingcart.php");
?>