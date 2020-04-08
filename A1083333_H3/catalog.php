<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body bgcolor="F5C165">
<?php
setcookie("totol","",$date);
?>
<form action="addcart.php" method="POST">
<P Align="center">
<font color="blue">選擇商品:</font>
<select name="buy" size="1">
	<option value="b1">10吋平板電腦-12000</option>
	<option value="b2">15吋筆記型電腦-21000</option>
	<option value="b3">iPhone手機-27000</option>
</select>
<input type="number" name="num" min="1" max="10" value="1" required="required">
<input type="submit" value="訂購"><br/>
</P>
</form>
<P Align="center">
<a href="cart.php">檢視購物車</a>
</P>
</body>
</html>