

<!DOCTYPE html>
<?php session_start(); ?>
<html>
<head><title> catalog.php</title></head>
<BODY bgcolor=" #DDDDDD">
<form action="shoppingcart.php" method="post">
<font size="45">購買表單</font> <br>


選擇商品:<select name="s1"  required>
　<option value="10吋變形平板-$12000">10吋變形平板-12000</option>             
　<option value="15.6吋筆記型電腦-$27000">15.6吋筆記型電腦-$27000</option>
　<option value="iPhone手機-$21000">iPhone手機-$21000</option>
數量:<input type="text" name="N" οninput="value=value.replace(/[^\d]/g,'')">
<input type="submit" name="send"value="購買"><br><br>

<a href="catalog.php">商品目錄</a>
<a href="shoppingcart.php">檢視購物車</a>

</from><br> <br> 
</select> <BR>
</BODY>
</html> 