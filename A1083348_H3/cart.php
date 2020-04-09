<form action="delete.php" method="POST">
<?php
session_start();
echo '<table border="1">
	<tr><td>功能</td><td>編號</td><td>名稱</td><td>價格</td><td>數量</td></tr>';
	
if(isset($_COOKIE["quantityA"]))
{
	echo 
	'<tr><td><input type="submit" name="one" value="刪除"></td>	
	<td>1</td>
	<td>'.$_SESSION["A"].'</td>
	<td>$'.$_SESSION["a"].'</td>
	<td>'.$_COOKIE["quantityA"].'</td></tr>';
}
if(isset($_COOKIE["quantityB"]))
{
	echo 
	'<tr><td><input type="submit" name="two" value="刪除"></td>	
	<td>1</td>
	<td>'.$_SESSION["B"].'</td>
	<td>$'.$_SESSION["b"].'</td>
	<td>'.$_COOKIE["quantityB"].'</td></tr>';
}
if(isset($_COOKIE["quantityC"]))
{
	echo 
	'<tr><td><input type="submit" name="three" value="刪除"></td>	
	<td>1</td>
	<td>'.$_SESSION["C"].'</td>
	<td>$'.$_SESSION["c"].'</td>
	<td>'.$_COOKIE["quantityC"].'</td></tr>';
}
$final=$_COOKIE["quantityA"]*$_SESSION["a"]+$_COOKIE["quantityB"]*$_SESSION["b"]+$_COOKIE["quantity"]*$_SESSION["c"];
echo '</table>';
echo '</br>';
echo "$final";
echo "元";
echo '</br>';
echo '<a href="catalog.php">返回商品頁</a></br>';

?>

<html>
<form action="delete.php" method="POST">
</form>
</html>
