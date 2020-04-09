<html>
<?php

session_start();

$_SESSION["1"]=$_POST["computer"];
$_SESSION["2"]=$_POST["phone"];
$_SESSION["3"]=$_POST["telephone"];

if (isset($_SESSION["1"])) 
{
	setcookie("computer","delete",time()-100);
	setcookie("q1","delete",time()-100);
}
if (isset($_SESSION["2"])) 
{
	setcookie("phone","delete",time()-100);
	setcookie("q2","delete",time()-100);
}
if (isset($_SESSION["3"])) 
{
	setcookie("telephone","delete",time()-100);
	setcookie("q3","delete",time()-100);
}

header("Location:shoppingcart.php");

?>
</html>