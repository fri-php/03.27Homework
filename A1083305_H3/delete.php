<html>
<?php

session_start();
$_SESSION["a1"]=$_POST["a1"];
$_SESSION["a2"]=$_POST["a2"];
$_SESSION["a3"]=$_POST["a3"];
$_SESSION["a4"]=$_POST["a4"];
$_SESSION["a5"]=$_POST["a5"];

if (isset($_SESSION["a1"]))
{
	setcookie("PRODUCT1","",time()-1);
	setcookie("NUMBER1","",time()-1);
}

if (isset($_SESSION["a2"]))
{
	setcookie("PRODUCT2","",time()-1);
	setcookie("NUMBER2","",time()-1);
}

if (isset($_SESSION["a3"]))
{
	setcookie("PRODUCT3","",time()-1);
	setcookie("NUMBER3","",time()-1);
}

if (isset($_SESSION["a4"]))
{
	setcookie("PRODUCT4","",time()-1);
	setcookie("NUMBER4","",time()-1);
}

if (isset($_SESSION["a5"]))
{
	setcookie("PRODUCT5","",time()-1);
	setcookie("NUMBER5","",time()-1);
}
header('Location:cart.php');

?>
</html>