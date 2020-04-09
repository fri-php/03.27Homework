<?php
	session_start();

	ob_start();//若header前的程式有錯可加這個(緩衝)

	// $id=$_POST["id"];
	// $pwd=$_POST["pwd"];
	// $uid="derrick";
	// $upwd="12345";

	$uid="A1063350"; //使用者id
	$upwd="12345";	//使用者pwd

	$id=$_POST["id"]; //使用者輸入的id
	$pwd=$_POST["pwd"];	//使用者輸入的pwd

	if($uid==$id && $upwd==$pwd){
		$_SESSION["login"]="Yes";
		$date = strtotime("+100 days",time());
		setcookie("loginName",$uid,$date);
		header("Location:success.php");//轉址功能
		//ob_flush();
	}else{
		$_SESSION["login"]="No";
		header("Location:fail.php");
	}


?>