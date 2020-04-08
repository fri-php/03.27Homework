<html>
<head>
	
</head>
<body bgcolor="#ccffe6">

<form action="savecart.php" method="POST">
選擇商品:
<select name="merchandise">
<option value="s001">10吋變形平板-$12000</option>
<option value="s002">15.6吋筆記型電腦-$27000</option>
<option value="s003">iPhone手機-$21000</option>	
</select>
<input type="number" name="quantity" min="1" value="1">
<input type="submit" value="訂購">
	
</form>	
</body>
</html>

<?php
session_start();
$A="10吋變形平板";
$B="15.6吋筆記型電腦";
$C="iPhone手機";
$a=12000;
$b=27000;
$c=21000;
$_SESSION["A"]=$A;
$_SESSION["B"]=$B;
$_SESSION["C"]=$C;
$_SESSION["a"]=$a;
$_SESSION["b"]=$b;
$_SESSION["c"]=$c;


echo '<a href="catalog.php">商品目錄</a>&nbsp&nbsp';
echo '<a href="shoppingcart.php">檢視購物車</a></br>';
echo '</br>';
echo '<a href="(shoppingcar)logout.php">登出</a>';
?>

