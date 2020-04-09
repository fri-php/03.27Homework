<table border="1">
<tr><td>功能</td><td>編號</td><td>商品名稱</td><td>數量</td><td>價格</td></tr>

<?php
if (isset($_COOKIE["金萱雙Q"])) 
{
	echo "<tr><td><form action='delete.php' method='POST'><input type='submit' name='1' value='刪除'></form></td><td>a001</td><td>金萱雙Q</td><td>".$_COOKIE["金萱雙Q"]."</td><td>35</td></tr>";
}
if (isset($_COOKIE["沖繩鮮奶茶"])) 
{
	echo "<tr><td><form action='delete.php' method='POST'><input type='submit' name='2' value='刪除'></form></td><td>a002</td><td>沖繩鮮奶茶</td><td>".$_COOKIE["沖繩鮮奶茶"]."</td><td>55</td></tr>";
}
if (isset($_COOKIE["古早味紅茶"])) 
{
	echo "<tr><td><form action='delete.php' method='POST'><input type='submit' name='3' value='刪除'></form></td><td>a003</td><td>古早味紅茶</td><td>".$_COOKIE["古早味紅茶"]."</td><td>25</td></tr>";
}

$PRICE=$_COOKIE["金萱雙Q"]*35+$_COOKIE["沖繩鮮奶茶"]*55+$_COOKIE["古早味紅茶"]*25
?>
<tr><td colspan="5">price:<?php echo $PRICE; ?></td></tr>
</table>

<a href="catalog.php">返回商品目錄</a>