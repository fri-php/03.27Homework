<table border="1">
<tr><td>功能</td><td>編號</td><td>商品名稱</td><td>價格</td><td>數量</td></tr>
<?php
if(isset($_COOKIE["10吋變形平板"])){
	echo"<tr><td><form action='delete.php' method='POST'><input type='submit' name='a' value='刪除'></form></td><td>a1000</td><td>10吋變形平板</td><td>12000</td><td>".$_COOKIE['10吋變形平板']."</td></tr>";
}
if(isset($_COOKIE["15吋筆記型電腦"])){
	echo"<tr><td><form action='delete.php' method='POST'><input type='submit' name='a' value='刪除'></form></td><td>a1000</td><td>15吋筆記型電腦</td><td>27000</td><td>".$_COOKIE['15吋筆記型電腦']."</td></tr>";
}
if(isset($_COOKIE["iPhone手機"])){
	echo"<tr><td><form action='delete.php' method='POST'><input type='submit' name='c' value='刪除'></form></td><td>a1000</td><td>iPhone手機</td><td>21000</td><td>".$_COOKIE['iPhone手機']." </td></tr>";
}
$price=$_COOKIE["10吋變形平板"]*12000+$_COOKIE["15吋筆記型電腦"]*27000+$_COOKIE["iPhone手機"]*21000;
?>
<tr><td>總金額：<?php echo $price; ?></td></tr>
</table>
<a href="catalog.php">商品目錄</a>
