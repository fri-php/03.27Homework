<h1>User Login</h1>

<?php

if (isset($_COOKIE["ID"])) 
	{
		$user=$_COOKIE["ID"];
		header('Location:shoppingcart.php');
	}
else
	{
		echo "歡迎新朋友";
		$user="";
	}

?>


<form action="logincheck.php" method="POST">
	Your ID:
		<input type="text" name="id" 
			value="<?php echo $user ?>">
		<br>
	Your Password:<input type="Password" name="pwd"><br>
	<input type="submit" name="submit">
</form>