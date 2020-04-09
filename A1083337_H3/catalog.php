<head>
	<title>訂購頁面</title>
</head>
<font face="標楷體">
<body bgcolor="#cccccc">
	<center>
<form action="addcart.php" method="POST">

選擇商品：<select name="Item">
<option value="chicken">雞$3000</option>
<option value="duck">鴨$1500</option>
<option value="curry">咖哩$21000</option>
</select><br/>
數量：<input type="text" name="number" required> 

<input type="submit" value="送啦"><br/>

<a href="cart.php">購物車</a>
</form>
</center>
</font>
</body>
