<?php

	session_start();
	$_SESSION["choosenum"] = $_POST["num"];

if(isset($_POST["item"])){
	if($_POST["item"] == "15.6吋筆記型電腦"){
		$_SESSION["chooseid"] = "001";
		$_SESSION["choosena"] = "15.6吋筆記型電腦";
		$_SESSION["chooseprice"] = 27000;
		setcookie("001", $_SESSION["chooseid"], time()+3600);
		setcookie("15.6吋筆記型電腦", $_SESSION["choosena"], time()+3600);
		setcookie("$27000", $_SESSION["chooseprice"], time()+3600);
		setcookie("item", $_SESSION["choosenum"], time()+3600);

		
	}else if($_POST["item"] == "iPhone手機"){
		$_SESSION["chooseid"] = "002";
		$_SESSION["choosena"] = "iPhone手機";
		$_SESSION["chooseprice"] = 21000;
		setcookie("002", $_SESSION["chooseid"], time()+3600);
		setcookie("iPhone手機", $_SESSION["choosena"], time()+3600);
		setcookie("$21000", $_SESSION["chooseprice"], time()+3600);
		setcookie("item", $_SESSION["choosenum"], time()+3600);
	}else if ($_POST["item"] == "10吋變形平板") {
		$_SESSION["chooseid"] = "003";
		$_SESSION["choosena"] = "10吋變形平板";
		$_SESSION["chooseprice"] = 12000;
		setcookie("003", $_SESSION["chooseid"], time()+3600);
		setcookie("10吋變形平板", $_SESSION["choosena"], time()+3600);
		setcookie("$12000", $_SESSION["chooseprice"], time()+3600);
		setcookie("item", $_SESSION["choosenum"], time()+3600);
	}
}
	header("Location:shoppingcart.php");
?>









