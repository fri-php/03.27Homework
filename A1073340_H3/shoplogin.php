<?php
if(isset($_COOKIE["loginName"])) //儲存HTTP傳遞cookie資料的結合陣列
{
	echo $_COOKIE["loginName"]."密碼錯誤<br>";
	setcookie("loginName", "", time()-3600);
	$inUsername=$_COOKIE['loginName'];
}
else
{
	$inUsername="";
}
?>
<h2>Please log me in</h2>
<form action="shopcheck.php" method="POST">
your ID：<input type="text" name="id" value="<?php echo $inUsername;?>"><br>
your password：<input type="password" name="pwd"><br>
<input type="submit"><br>
</form>