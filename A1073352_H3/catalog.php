<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body bgcolor="#FFD4FF">
<?php
setcookie("total","",$date);
?>
<form action="addcart.php" method="POST">
<P Align="center">
<font color="blue">選擇商品:</font>
<select name="buy" size="1">
	<option value="b1">帥薯薯馬鈴薯條</option>
	<option value="b2">蔬菜脆片</option>
	<option value="b3"> 大燕麥千層棒</option>
	<option value="b4">燕麥可可Bar</option>
	<option value="b5"> 水果脆片</option>
</select>
<input type="number" name="num" min="1" max="10" value="1" required="required">
<input type="submit" value="訂購"><br/>
</P>
</form>
<P Align="center">
<a href="cart.php">查看購物車</a>
</P>
</body>
</html>