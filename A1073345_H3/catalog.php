<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<style>
			body {background-color: #F4E1C6;}
			h2   {color: #FF8C69;}
	</style>
</head>
<body>
<?php
setcookie("total","",$date);
?>
<form action="addcart.php" method="POST">

<h2 align="center">Crispy Family 買起來各位～♡˙︶˙♡ (ゝ∀･)b (ゝ∀･)b (ゝ∀･)b ଘ(⸝⸝ᴗ͈   ̫ ᴗ͈⸝⸝)♡</h2>
<P Align="center">
<font color="#8A2BE2">請選擇您要購買的商品：</font>
<select name="buy" size="1">
	<option value="b1">【1 for one 挺好】帥薯薯馬鈴薯條</option>
	<option value="b2">【1 for one 挺好】蔬菜脆片 </option>
	<option value="b3">【1 for one 挺好】 大燕麥千層棒</option>
	<option value="b4">【1 for one 挺好】燕麥可可Bar</option>
	<option value="b5">【1 for one 挺好】水果脆片</option>

</select>
<input type="number" name="num" min="1" max="10" value="1" required="required">
<input type="submit" value="加入購物車"><br/>
</P>
</form>
<P Align="center">
<a href="cart.php">點我前往購物車GO GO GO</a>
</P>
</body>
</html>