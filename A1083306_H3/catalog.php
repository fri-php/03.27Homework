<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
</head>
<body>

<form action="addcart.php" method="POST">

<font>選擇商品:</font>
<select name="item" size="1">
	<option value="item1">奶茶 $20/杯 </option>
	<option value="item2">紅茶 $20/杯 </option>
	<option value="item3">綠茶 $20/杯 </option>
	<option value="item4">特調 $20/杯 </option>	
</select>
<br/><br/>

數量:<input type="number" name="number" min="0" max="10" value="1" required="required"><br/><br/>
<input type="submit" value="訂購"><br/><br/>

</form>
<P>
<a href="cart.php">檢視購物車</a>
</P>
</body>
</html>