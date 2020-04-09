<?php
session_start();
if(isset($_COOKIE["loginName"]))
{ 
	echo $_COOKIE["loginName"]."歡迎您<br/>";
	setcookie("loginName","",time()-3600);
	$inUsername=$_COOKIE["loginName"];
}
?>
<form action="savecart.php" method="POST">
<center><font size="6">
<h1>歡迎來到訂購頁面</h1></br>
請選擇您想要的商品:	
<select name="item">
<option value="table">10吋平板電腦-$12000</option>
<option value="phone">iphone手機-$20000</option>
<option value="notebook">15.6吋筆記型電腦-$27000</option>
</select></br>
數量:<input type="text" name="quantity"></br>
<input type="submit" value="放入購物車"></br></br>
<a href="shoppingcart.php">檢視購物車</a>
</font>
</form>