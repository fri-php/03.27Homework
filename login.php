<form action="登入確認.php" method="post">
<h3>登入<h3><br/>
使用者名稱：<input type="text" name="uid" value="<?php echo $inusername;?>">
密 碼：<input type="password" name="upwd"><br>
<input type="submit" value="登入">
</form>
<form action="登出.php" method="post"><input type="submit" name="登出" value="登出"></form>
<?php
if(isset($_COOKIE["cat"]))
{
	echo $_COOKIE["cat"]."歡迎再來<br/>";
	setcookie("cat","",time()-3600);
	$inusername=$_COOKIE['cat'];
}else
{
	echo "歡迎第一次來本站<br/>";
	$inusername="";
}
?>