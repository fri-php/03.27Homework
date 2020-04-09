<?php#id=id password=12345?>
<h2>User Login</h2>

<form action="check.php" method="post">
	ID:<input type="text" name="id" value="<?php echo $_COOKIE['ID'];?>"><br/>
	PASSWORD:<input type="password" name="pwd"><br/>
	<input type="submit"><br/>
</form>