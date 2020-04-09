<table border="1" >
<tr><td>功能</td><td>編號</td><td>商品名稱</td><td>價格</td><td>數量</td></tr>


<?php
if(isset($_COOKIE["小孩頭米餅"]))
{
	echo "<tr><td><form action='delete.php' method='POST'><input type='submit' name='a' value='刪除'></form></td><td>s1001</td><td>小孩頭米餅</td><td>20</td><td>".$_COOKIE["小孩頭米餅"]."</td></tr>";
}
if(isset($_COOKIE["小孩頭麵線"]))
{
	echo "<tr><td><form action='delete.php' method='POST'><input type='submit' name='b' value='刪除'></form></td><td>s1002</td><td>小孩頭麵線</td><td>60</td><td>".$_COOKIE["小孩頭麵線"]."</td></tr>";
}
if(isset($_COOKIE["小孩頭手機架"]))
{
	echo "<tr><td><form action='delete.php' method='POST'><input type='submit' name='c' value='刪除'></form></td><td>s1003</td><td>小孩頭手機架</td><td>200</td><td>".$_COOKIE["小孩頭手機架"]."</td></tr>";
}

$kid=$_COOKIE["小孩頭米餅"]*20+$_COOKIE["小孩頭麵線"]*60+$_COOKIE["小孩頭手機架"]*200;
?>
<tr><td colspan="5">總金額:<?php echo $kid; ?></td></tr>
</table>

<a href="catalog.php">商品目錄</a>