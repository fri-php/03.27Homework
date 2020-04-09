<?php

session_start();

if($_SESSION["login"]!="true")
	header("location:login.php?err=2");

$_SESSION["mdse"]=$mdse=array(
								array("建達巧克力", 25),
								array("肉類", 89),
								array("無糖綠茶", 25),
								array("蜂蜜牛奶", 45),
								array("時尚皮夾", 1200),
								array("10吋變形平板", 12000),
								array("15.6吋筆記型電腦", 27000),
								array("iPhone手機", 21000),
								array("唐鳳能刪掉資源回收筒", 7),
								array("小孩頭聯名文創手機架", 599),
								array("證明可微必連續", 55555),
								array("絆倒鐵盒", 210),
								array("ʕ•ﻌ•ʔ", 1083345),
								array("超時尚皮夾", 180000)
							);

?>

<html>

<head>
	<meta charset="utf-8">
	<title>A1083345 商品目錄</title>
</head>

<body bgcolor="#F8F9F9">

	<font face="微軟正黑體">

		<form action="savecart.php" method="POST">

			<b>選擇商品</b>&nbsp;
			<select name="item">
				<?php
				for($i=0; $i<count($mdse); $i++)
				{
					echo "<option value='S".$i."'>";
					echo $mdse[$i][0]." - $".$mdse[$i][1];
					echo "</option>";
				}
				?>
			</select><br/>

			<b>購買數量</b>&nbsp;
			<input type="number" name="quantity" value="1" min="1" style="width:75px">&nbsp;
			<input type="submit" style="background-color:#D6EAF8" value="訂購"><br/><hr>

			<input type="button" value="檢視購物車" style="background-color:#D5F5E3" onclick="location.href='shoppingcart.php'">&emsp;
			<input type="button" value="登出" style="background-color:#FADBD8" onclick="location.href='logout.php'">

		</form>

	</font>

</body>

</html>