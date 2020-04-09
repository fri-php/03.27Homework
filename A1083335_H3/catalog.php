<?php
 setcookie("total","",$date);


 ?>
 <html>
 <body>
<form action="addcart.php" method="POST">
選擇商品:
<select name="buy">
　<option value="a1">杏仁脆片-200元</option>
　<option value="a2">南瓜子脆片-150元</option>
　<option value="a3">夏威夷豆脆片-230元</option>
</select><br/>
訂購數量:</b><input type="number" name="num"><br/>
<input type="submit" value="加入購物車"><br/>
<a href="cart.php">檢視購物車</a>

</form>
</body>
</html>


