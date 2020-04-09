<?php
if (isset($_COOKIE["loginName"])) {
	echo $_COOKIE["loginName"]."歡迎再次回來"."<br/>";
	setcookie("loginName","",time()-3600);
	$inUsername=$_COOKIE['loginName'];
}
else{
	echo "歡迎第一次來到本站<br/>";
	$inUsername="";
}
?>

<h2>Log me in</h2>
<form action="check.php" method="POST">
YOUR ID:<input type="text" name="id" value="<?php echo $_COOKIE["loginName"];?>"></br>
YOUR Password:<input type="password" name="pwd"></br>
<input type="submit"></br>
</form>