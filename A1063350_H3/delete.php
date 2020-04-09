<?php

	session_start();
	// if(isset($_POST["item"])== "15.6吋筆記型電腦"){
	// 	unset($_SESSION["choosena"]);
	// 	//setcookie("item1", "", time()-3600);
	// // }else if (isset($_POST["item"]) == "iPhone手機") {
	// // 	setcookie("item2", "", time()-3600);
	// // }else{
	// // 	setcookie("item3", "", time()-3600);
	// // }

	unset($_SESSION["choosena"]);
	unset($_SESSION["chooseprice"]);

	if(isset($_POST["item"])){
		if($_POST["item"] == "15.6吋筆記型電腦"){
			unset($_SESSION["choosena"]);
			
		}else if($_POST["item"] == "iPhone手機"){
			unset($_SESSION["choosena"]);
			
		}else if ($_POST["item"] == "10吋變形平板") {
			unset($_SESSION["choosena"]);
			
		}
	}

	header("Location:shoppingcart.php");

	






?>