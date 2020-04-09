<body bgcolor="#fff8dc">
<?php
session_start();

if(isset($_SESSION["login"])){  //先看他有沒有
	if($_SESSION["login"]=="Yes"){
		header("Location:shoppingcart.php");
	}else{
		echo "登入失敗<br/><br/>";
		echo "<a href='login.php'>重新登入</a>";
	}
}else{
	echo "非法進入<br/>";
	echo "<a href='login.php'>回首頁</a>";
}

?>
</body>