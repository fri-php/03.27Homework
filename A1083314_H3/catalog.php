<?php
session_start();
if($_SESSION["login"]=="No")
{
header('Location:failhw.php');
}
?>

<form action="addcart.php" method="post">
<body>
<h1>選擇商品<select name="item"></h1>
<option value="tablet" style="font-size:large">10吋平板電腦-$10000</option>
<option value="iphone"  style="font-size:large">iphone手機-$23000</option>
<option value="notebook"  style="font-size:large">15.6吋筆記型電腦-$29000</option>
</select>
<input type="text" name="number" required="required">
<input type="submit" value="購買">
<h1><a href="addcart.php>">商品目錄</a></h1>
<h1><a href="cart.php>">查看已購項目</a></h1>
</form>
</body>	