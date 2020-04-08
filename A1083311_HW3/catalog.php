<div align="center">
<?php
if(isset($_COOKIE["loginName"]))
{ 
	echo $_COOKIE["loginName"]."歡迎您的到來<br/>";
	setcookie("loginName","",time()-3600);
	$inUsername=$_COOKIE["loginName"];
}
?>
</div>
<form action="savecart.php" method="POST">
<div align="center"style=" background-color:gray;">
<font size="5" color="CD50FA">選擇商品<select name="item"></font>
<option value="tablet" style="font-size:20pt" >10吋平板電腦-$12000</option>	
<option value="iphone" style="font-size:20pt">iphone手機-$20000</option>
<option value="notebook" style="font-size:20pt">15.6吋筆記型電腦-$27000</option>
</select>
數量:<input type="text" name="quantity">
</font>
<input type="submit" name="訂購">
<hr>
<font size="3" color="1545F1">
<a href="savecart.php">商品目錄</a>
&nbsp&nbsp&nbsp
<a href="shoppingcart.php">檢視購物車
</a>&nbsp&nbsp&nbsp
<a href="logout(hw).php">登出
</a></font>
</form></div>
</body>	