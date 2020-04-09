<?php
session_start();
if($_SESSION["login"]=="S"){
	echo "登入成功<br><br>";
	echo "<a href='logout.php'>登出系統";
}else{
	header('Location:login.php');
}
$A="R9 3950X";$a=25000;$_SESSION["A"]=$A;$_SESSION["a"]=$a;
$B="R7 3700X";$b=10500;$_SESSION["B"]=$B;$_SESSION["b"]=$b;
$C="R5 3600X";$c=6700;$_SESSION["C"]=$C;$_SESSION["c"]=$c;

echo '<a href="catalog.php"></a><br>';
echo '<a href="cart.php">檢視購物車</a></br>';
echo '</br>';
?>
<html>
<form action="addcart.php" method="POST">
給我買爆:
<select name="goods">
　<option value="1">R9 3950X</option>
　<option value="2">R7 3700X</option>
　<option value="3">R5 3600X</option>
</select>

<input type="number" name="quantity" min="1" value="1">
<input type="submit" value="訂購">
</html>
