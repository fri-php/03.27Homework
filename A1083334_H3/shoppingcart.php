<table border="2">
<tr><td>功能</td><td>編號</td><td>商品名稱</td><td>價格</td><td>數量</td></tr>
<?php
if(isset($_COOKIE["阿呆的奶茶"]))
{
	echo"<tr><td><form action='delete.php' method='POST'>
	<input type='submit' name='a' value='刪除'>
	</form></td>
	<td>1</td><td>阿呆的奶茶</td><td>30</td><td>".$_COOKIE["阿呆的奶茶"]."</td></tr>";
}
if(isset($_COOKIE["阿呆的薯條"]))
{
	echo"<tr><td><form action='delete.php' method='POST'>
	<input type='submit' name='b' value='刪除'>
	</form></td>
	<td>2</td><td>阿呆的薯條</td><td>20</td><td>".$_COOKIE["阿呆的薯條"]."</td></tr>";
}
if(isset($_COOKIE["阿瓜的小孩頭"]))
{
	echo"<tr><td><form action='delete.php' method='POST'>
	<input type='submit' name='c' value='刪除'>
	</form>
	<td>3</td><td>阿瓜的小孩頭</td><td>10</td><td>".$_COOKIE["阿瓜的小孩頭"]."</td></tr>";
}
if(isset($_COOKIE["阿傻的微積分作業"]))
{
	echo"<tr><td><form action='delete.php' method='POST'>
	<input type='submit' name='d' value='刪除'>
	</form>
	<td>4</td><td>阿傻的微積分作業</td><td>1</td><td>".$_COOKIE["阿傻的微積分作業"]."</td></tr>";
}
if(isset($_COOKIE["阿笨的錢包"]))
{
	echo"<tr><td><form action='delete.php' method='POST'>
	<input type='submit' name='e' value='刪除'>
	</form>
	<td>5</td><td>阿笨的錢包</td><td>1000</td><td>".$_COOKIE["阿笨的錢包"]."</td></tr>";
}
if(isset($_COOKIE["阿笨的酒精"]))
{
	echo"<tr><td><form action='delete.php' method='POST'>
	<input type='submit' name='f' value='刪除'>
	</form>
	<td>6</td><td>阿笨的酒精</td><td>20</td><td>".$_COOKIE["阿笨的酒精"]."</td></tr>";
}


$total=$_COOKIE["阿呆的奶茶"]*30+$_COOKIE["阿呆的薯條"]*20+$_COOKIE["阿瓜的小孩頭"]*10+$_COOKIE["阿傻的微積分作業"]*1+$_COOKIE["阿笨的錢包"]*1000+$_COOKIE["阿笨的酒精"]*20;


?>

<tr><td>總價:<?php echo $total; ?></td></tr>
</table>
<a href="catalog.php">目錄</a>
