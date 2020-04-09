<link rel=stylesheet type="text/css" href="style.css">
<title>A1083308 購物車登入頁面</title>
<center>
<h2>登入系統</h2>
<?php
error_reporting(0);
	if (isset($_COOKIE["loginName"])){
		echo $_COOKIE["loginName"]."歡迎再次登入";

		setcookie("loginName","",time()-3600);
		$inUsername=$_COOKIE['loginName'];
	}
	else{
		echo "歡迎第一次來本站";
		$inUsername="";
	}
?>
<h2></h2>
<form action="logincheck.php" method="post">
	
帳號：<input type="text" name="id" value="<?php echo $_COOKIE["loginNames"];?>"><br/>
密碼：<input type="password" name="pwd">	
<h2></h2>
<input type="submit" value="登入" id="button" >
</form>
</center>