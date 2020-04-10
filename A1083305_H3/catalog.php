<html>
<head>
<style>
        html {
            height: 95%;
        }

        body {
            background-image: url(擷取2.PNG);
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }
</style>
</head>
<center>
<font face="微軟正黑體, Arial">
<form  action="addcart.php" method="POST">
<p>
<font size="5">選擇商品：
<select style="font-size:20px;" name="product">
	<option value="product1">平板電腦--$200</option>
	<option value="product2">手機--$100</option>
	<option value="product3">水果--$50</option>
	<option value="product4">蔬菜--$20</option>
	<option value="product5">肉類--$1000</option>
</style>
</select> 
數量：<input type="text" name="number" style="width:45px; height:25px;">
</font>
</p>
<input type="submit"  value="加入購物車">
<a href="cart.php">檢視購物車</a>
</form>
</center>
</font>
</html>
