<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title> </title>
	<style>
			body {background-color: #F4E1C6;}
			h2   {color: #FF8C69;}
	</style>
	
</head>
<body>
	<br/>
	<h2 align="center">請輸入帳號密碼，登入後即可進行訂購的動作囉～:D</h2><br/>

	<form action="check.php" method="POST" align="center" >
		帳號：<input type="text" name="id" value="<?php echo $input; ?>"><br/>
		密碼：<input type="password" name="pwd"><br/>
		<br/>
		<input type="reset" value="重新輸入">
		<input type="submit" value="確定送出"><br/>

	</form>
	</p>
</body>
</html>

<?php
if (isset($_COOKIE["logname"]))
{
	echo "<center>".$_COOKIE["logname"]."Welcome back to Crispy Family !<br/>";
	$input=$_COOKIE["logname"];
}
else
{
	echo "<center>"."Welcome to Crispy Family !<br/>";
	$input="";
}



?>
