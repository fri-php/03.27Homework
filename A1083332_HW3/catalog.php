

<!DOCTYPE html>
<html>
<head>
	<title>商品目錄</title>
</head>

<h1>請選擇您需要的商品</h1>

<form action="savecart.php" method="post" accept-charset="utf-8">
	
	<select name="product" multiple>
		<option value="ipad">10吋變形平板-12000</option>
		<option value="com">15.6吋筆記型電腦-21000</option>
		<option value="cel">iPhone手機-27000</option>
	</select>
	<input type="number" name="quantity" min="0"><br><br>
	<input type="submit" name="訂購"><br><br>

	<a href="shoppingcart.php">檢視購物車</a>
</form>
</html>