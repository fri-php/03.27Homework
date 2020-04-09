<?php

$ID=$GET_["ID"]
if (isset ($_COOKIE[$ID])) {
	while (list($name,$value)=each($_COOKIE[$ID])) 
		
	setcookie($ID."[".$name."]","",time()-3000)
}

header("location:shoppingcart.php");


?>