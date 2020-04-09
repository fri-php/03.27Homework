<?php
	session_start();

	$thing=$_POST["thing"];
	$nombor=$_POST["nombor"];
	$date=strtotime("+100 days", time());
	
	if($thing==1){
		setcookie("thing1", $thing, $date);
		setcookie("nombor1", $nombor, $date);
	}elseif ($thing==2) {
		setcookie("thing2", $thing, $date);
		setcookie("nombor2", $nombor, $date);
	}elseif ($thing==3) {
		setcookie("thing3", $thing, $date);
		setcookie("nombor3", $nombor, $date);
	}

	header('Location:shop.php')
?>