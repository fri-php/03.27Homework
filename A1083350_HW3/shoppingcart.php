<html>
<head>
	<title>shoppingcart</title>
</head>
<body>

<?php
echo "<table border='1'>
	<tr>
	<th>功能</th>
	<th>名稱</th>
	<th>數量</th>
	<th>價格</th>
	</tr>";

if(isset($_COOKIE["thing1"])){	
	echo
	"<tr>
	<td><a href='delete.php?id=1'>刪除</a></td>
	<td>10吋變形平板</td>
	<td>";
	echo $_COOKIE["nombor1"];
	echo"</td>
	<td>$12000</td>
	</tr>";
}
if(isset($_COOKIE["thing2"])){
	echo 
	"<tr>
	<td><a href='delete.php?id=2'>刪除</a></td>
	<td>15.6吋筆記型電腦</td>
	<td>";
	echo $_COOKIE["nombor2"];
	echo "</td>
	<td>$27000</td>
	</tr>";
}
if(isset($_COOKIE["thing3"])){
	echo
	"<tr>
	<td><a href='delete.php?id=3'>刪除</a></td>
	<td>iPhone手機</td>
	<td>";
	echo $_COOKIE["nombor3"];
	echo "</td>
	<td>$21000</td>
	</tr>";
}

echo "<tr>
<td colspan='4' style='text-align:right;'>總價格=";
echo (12000*$_COOKIE["nombor1"])+(27000*$_COOKIE["nombor2"])+(21000*$_COOKIE["nombor3"]) ;
echo "</td>
</tr>
</table>";

echo "<a href='shop.php'>回到商品頁面</a>";

?>

</body>
</html>