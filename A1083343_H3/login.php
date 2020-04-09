<?php
if(isset($_COOKIE["loginName"])){
	echo $_COOKIE["loginName"]."歡迎再次回來<br/>";
	setcookie("loginName","",time()-3600);
	$inUsername=$_COOKIE['loginName'];
}else{
	echo "歡迎第一次來本站<br/>";
	$inUsername="";
}

?>
<h2>Please log me in</h2>
<form action="logincheck.php" method="post">
Your ID:<input type="text" name="id" value="<?php echo $inUsername;?>"><br/>
Your Password:<input type="password" name="pwd"><br/>
<input type="submit"><br/>
</form>