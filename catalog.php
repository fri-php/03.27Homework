<?php if (isset($_COOKIE["ID"])): ?>
		<form action="savecart.php" method="POST">
	選擇商品:
	<select name="item">
		<option value="10吋變形平板">
			10吋變形平板-$12000
		</option>
		<option value="15.6吋筆記型電腦">					15.6吋筆記型電腦-$27000
		</option>
		<option value="iPhone手機">
			iPhone手機-$21000
		</option>
	</select>
	<input type="text" name="number">
	<input type="submit" value="訂購"><br>
	<a href="login.php">檢視購物車</a><br>
	<a href="logout.php">登出</a><br>

</form>  
<?php else: ?>
	<p>非法進入</p>
	<a href='login.php'>回登入畫面</a>
<?php endif ?>
