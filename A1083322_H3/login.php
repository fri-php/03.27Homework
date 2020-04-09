<?php

if (isset($_COOKIE["loginName"]))
{
	echo $_COOKIE["loginName"]."歡迎再次回來<br/>";
	setcookie("loginName","",time()-3600);
	$inUsername=$_COOKIE['loginName'];
}
else
{
	echo "歡迎第一次來到本站，請先登入以購買商品<br/>";
	$inUsername="";
}

?>

<body bgcolor="#eebbf7">
<form action="logincheck.php" method="post">
<h2>Please log me in</h2>
Your ID:
	<input type="text" name="id" value="<?php echo $_COOKIE["loginName"];?>"><br/>
Your Password:
	<input type="passward" name="pwd"><br/>
	<input type="submit" value="送出"><br/>	
</form>
</body>