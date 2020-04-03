<?php
session_start();
if($_SESSION["login"]=="YES"){
}else{
	header('Location:forbid.php');
}
?>

<form action="savecart.php" method="POST">
<body bgcolor="#FFB3FF">
<center>
<font size="5" color="#0000FF">選擇商品:<select name="item" style="width:200px"></font>
<option value="tablet" style="font-size:20pt">10吋平板電腦-$12000</option>
<option value="iphone" style="font-size: 20pt">iphone手機-$20000</option>
<option value="notecomputer" style="font-size: 20pt">15.6吋筆記型電腦	-$27000</option>
</select>

<input type="text" name="number" required style="width:50px">

<input type="submit" value="訂購">
<hr>

<font size="3" color="#0000FF"><a href="savecart.php">商品目錄</a></font>
&nbsp
<font size="3" color="#0000FF"><a href="shoppingcart.php">檢視購物車
</a></font>
</form></center>
</body>	











