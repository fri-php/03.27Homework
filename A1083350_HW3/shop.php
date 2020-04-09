<form action="savecart.php" method="POST">
	<table>
		<tr>
			<td>選擇商品</td>
			<td><select name="thing">
				<option value="1">10吋變形平板 - $12000</option>
				<option value="2">15.6吋筆記型電腦 - $27000</option>
				<option value="3">iPhone手機 - $21000</option>
			</select></td>
			<td><input type="number" name="nombor" placeholder="數量" size="5%" min="0"></td>
			<td><input type="submit" value="訂購"></td>
		</tr>
	</table>
</form>

<?php
session_start();

echo "<a href='shop.php'>商品目錄</a><br>";
echo "<a href='shoppingcart.php'>檢視購物車</a><br>";
echo "<a href='logout.php'>登出</a><br>";

?>