<html>
<head>
	
</head>
<body bgcolor="#ccffe6">

<?php

if(isset($_COOKIE["loginName"]))
{
	echo $_COOKIE["loginName"]."歡迎再次回來<br/>";
	setcookie("loginName","", time()-3600);
	$inUsername=$_COOKIE["loginName"];
}
else
{
	echo "歡迎第一次來本站<br/>";
	$inUsername="";
}

?>

<form action="(shoppingcar)logincheck.php" method="POST">
Your ID:<input type="text" name="id"  value="<?php echo $inUsername;?>"><br/>
Your passward:<input type="passward" name="pwd"><br/>
<input type="submit"><br/>
</form>

</body>
</html>