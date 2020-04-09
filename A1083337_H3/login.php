
<head>
	
	<title>登入頁面</title>
</head>
<body bgcolor="#cccccc">
	<font face="標楷體">
	<center>
<h2>User Login</h2><br>


<?php
if (isset($_COOKIE["ID"])) 
{
	echo "歡迎再度光臨".$_COOKIE["ID"];
	setcookie("loginName","",time()-"10days");
}else{
	echo "<h2>"."歡迎新朋友"."</h2>";
}
?>

<form action="logincheck.php" method="POST">
	Your ID:<input type="text" name="id" value="<?php echo $_COOKIE["ID"]; ?>"><br/>
	Your Password:<input type="password" name="pwd"><br/>
	<input type="submit"><br/>
</form>
</font>
</body>
</center>

</html>


