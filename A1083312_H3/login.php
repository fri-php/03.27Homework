<?php

if (isset($_COOKIE["loginName"]))
{
	echo $_COOKIE["loginName"]."歡迎回來<br/>";
	setcookie("loginName","",time()-3600);
	$inUsername=$_COOKIE['loginName'];
}
else
{
	echo "第一次來到本站，請先登入以購買商品<br/>";
	$inUsername="";
}

?>

<body>
<form action="logincheck.php" method="post">
<h2>Please log me in</h2>
ID:
	<input type="text" name="id" value="<?php echo $_COOKIE["loginName"];?>"><br/>
Password:
	<input type="passward" name="pwd"><br/>
	<input type="submit" value="送出"><br/>	
</form>
</body>