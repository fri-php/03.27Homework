<body bgcolor="#fff8dc">
<?php
session_start();

if(isset($_SESSION["login"])){  //先看他有沒有
	if($_SESSION["login"]=="Yes"){
		echo "登入成功<br/><br/>";
		// echo "<a href='logout.php'>登出</a><br/>";
		// echo "<a href='catalog.php'>進入購物</a>";
		echo "<button type='button' ><a href='catalog.php'>進入購物</button></a>";

	}else{
		header("Location:fail.php");
	}
}else{
	echo "非法進入<br/>";
	echo "<a href='login.php'>回首頁</a>";
}

?>
</body>