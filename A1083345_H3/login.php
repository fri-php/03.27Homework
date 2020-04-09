<html>

<head>
	<meta charset="utf-8">
	<title>A1083345 登入購物車</title>
</head>

<body bgcolor="#F8F9F9">

	<font face="微軟正黑體">

		<form action="logincheck.php" method="POST">

			<b>請輸入帳號</b>&nbsp;
			<input type="text" name="id" required="required"><br/>
			<b>請輸入密碼</b>&nbsp;
			<input type="password" name="pwd" required="required"><br/>
			<input type="submit" style="background-color:#D5F5E3" value="登入">&emsp;
			<input type="reset" style="background-color:#FADBD8" value="重設">

		</form>

		<?php
		if($_GET["err"]==1)
			echo "<script>alert('帳號或密碼錯誤')</script>";

		if($_GET["err"]==2)
			echo "<script>alert('尚未登入')</script>";
		?>

	</font>

</body>

</html>