<link rel=stylesheet type="text/css" href="style.css">
<?php
session_start();

setcookie($_POST["id"],$_POST["quantity"],time()+3600 );
if(isset($_SESSION["login"])){
	if($_SESSION["login"]=="Yes")
		header("Location:shoppingcart.php");
	else{
	echo "<H1 >請先登入</H1>";
	header("Refresh:2;url=login.php");
	}
}
else{
	echo "<H1 text_align>請先登入</H1>";
	header("Refresh:2;url=login.php");
}
?>