<?php

if (isset($_COOKIE["logname"]))
{
	echo "<center>".$_COOKIE["logname"]."，Welcome back♡<br/>";
	$input=$_COOKIE["logname"];}
else
{echo "<center>"."Welcome Crispy Family購物車♡<br/>";
$input="";
}
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title> 
		Login
	</title>
</head>
<body>
	<p align="center" >
	<form action="check.php" method="POST" align="center" >
		帳號:<input type="text" name="id" value="<?php echo $input; ?>"><br/>
		密碼:<input type="password" name="pwd"><br/>
		<input type="reset" value="重新輸入">
		<input type="submit" value="確定送出"><br/>
	</form>
	</p>
</body>
</html>