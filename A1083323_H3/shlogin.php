<?php
if (isset($_cookie["loginName"]))
{
	setcookie("loginName","" , time-3600);
$inUsername=$_cookie['loginName'];
}
else
{
	echo"歡迎第一次來本站<br/>";
	$inUsername="";
}

?>
<h2>Please log me in</h2>
<form action="loginck.php" method="POST">
your id:<input type="text" name="id" value="<?php echo$inUsername;?>"></br>
your password:<input type="password" name="pwd"><br/>
<input type="submit"><br/>
</form>