<center>
<?php
if(isset($_COOKIE["loginName"])){
	echo $_COOKIE["loginName"]."歡迎再次來本站<br/>";
	setcookie("loginName","",time()-3600);
	$inUsername=$_COOKIE['loginName'];
}else{
	echo "歡迎第一次來本站<br/>";
	$inUsername="";
}
?>
<style>
table, th, td 
{
  table-layout: fixed;
}
</style>

<form action="logincheck.php" method="POST">
<table border=1 bgcolor="#FFFACD" style="width:600">
<tr>
<td>Your ID</td>
<td><input type="text" name="id" value="<?php echo $inUsername;?>"></td>
</tr>
<tr>
<td>Your Password</td>
<td><input type="password" name="pwd"></td>
</tr>
</table>
<input type="submit"><br/>
</center>
</form>