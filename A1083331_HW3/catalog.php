	<title>歡迎使用本購物網</title>
	<body>
	<form action="savecart.php" method="POST">
請選擇商品:<select name="goods"> 
	<option value="com">電腦-$14999</option>
	<option value="tv">電視-$9999</option>
	<option value="ele">電冰箱-$39999</option>
</select><br/>
請選擇數量:<input type="number" min="0" value="0" name="num"><br/>
<input type="submit" value="添加到購物車">
<br/>
|<a href="shoppingcart.php">看購物車</a>|

</form>
<form action="logout.php" method="POST">
|<input type="submit" name="out" value="登出">|
</form>
</body>

<?php
session_start();



$coo="電腦";
$ttt="電視";
$eee="電冰箱";
$cp="14999";
$tp="9999";
$ep="39999";
$_SESSION["coo"]=$coo;
$_SESSION["ttt"]=$ttt;
$_SESSION["eee"]=$eee;
$_SESSION["cp"]=$cp;
$_SESSION["tp"]=$tp;
$_SESSION["ep"]=$ep;
?>
