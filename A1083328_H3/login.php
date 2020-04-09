<html>
<head>
	<title>Login Page</title>
</head>
<center>
<body style="background-color:blue;">

<h2>User Login</h2>

<?php
if(isset($_COOKIE["ID"])){
	$user=$_COOKIE["ID"];
	echo "Welcome Customers!".$_COOKIE["ID"]."</br></br>";
	setcookie("ID","",time()-3600);
}else{
	echo "Welcome Customer!</br></br>";
}
?>


<form action="logincheck.php" method="post">
Your username :<input type="text" name="id" value="<?php echo $_COOKIE["ID"]?>" required><br/>
Your password :<input type="password" name="password" required><br/>
<input type="submit" name="submit">

</form>
</center>
</body>
</html>