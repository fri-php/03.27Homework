<?php
session_start();
if (isset($_SESSION["logina"])) {
	if ($_SESSION["logina"]=="nn") {
	header('Location:catalog.php');      	
	}else{
		header('Location:login.php');
	}
}else{
	header('Location:login.php');
}

?>