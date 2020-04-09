<!DOCTYPE html>
<html>
<head>
	<title>我的購物車</title>
</head>
<body>
<table border="1">
	<tr><td>功能</td><td>編號</td><td>商品名稱</td><td>價格</td><td>數量</td></tr>

	<?php
	session_start();

	if(isset($_COOKIE["s001"]))
	{
		echo '<tr>
			<td><form action="delete.php" method="POST"><input type="submit" name="a" value="delete"></td>
			<td>s001</td>
			<td>10吋變形平板</td>
			<td>12000</td>
			<td>'.$_COOKIE["s001"].'</td>
		</tr>';
	}

	if(isset($_COOKIE["s002"]))
	{
		echo '<tr><td><form action="delete.php" method="POST"><input type="submit" name="b" value="delete"></td>
			<td>s002</td>
			<td>15.6吋筆記型電腦</td>
			<td>21000</td>
			<td>'.$_COOKIE["s002"].'</td>
		</tr>';
	}	

	if(isset($_COOKIE["s003"]))
	{
		echo '<tr>
			<td><form action="delete.php" method="POST"><input type="submit" name="c" value="delete"></td>
			<td>s003</td>
			<td>iPhone手機</td>
			<td>27000</td>
			<td>'.$_COOKIE["s003"].'</td>
		</tr>';
	}	

	$total=$_COOKIE["s001"]*12000+$_COOKIE["s002"]*21000+$_COOKIE["s003"]*27000;

	echo '<tr><td>總金額</td><td colspan="4" >'.$total.'元</td></tr>';
	?>

	
	</form>
	<a href="catalog.php">商品目錄</a>
</table>
</body>
</html>