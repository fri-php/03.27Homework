<html>
<head>
<link rel=stylesheet type="text/css" href="style.css">
<title>A1083308 商品目錄</title>
</head>
<body>
<center>
<?php
session_start();

$_SESSION["list"]=$list=array(
							array("紅茶",20),
							array("珍珠豆花",30),
							array("花生豆花",30),
							array("綜合豆花",35),
							array("給開司一份薯片",30),
							array("給開司一罐啤酒",35),
							array("大魔術熊貓麻婆豆腐",80),
							array("獵人定食",120),
							array("Dr Pepper",25),
							array("波蘿麵包",20),
							array("半價便當",45),
							array("黏稠濃厚桃子味果汁",20),
							);
echo "<table border='1' >";
echo "<tr><th>商品名稱</th><th>單價(元)</th></tr>";
foreach ($_SESSION["list"] as $i => $j){
	echo "<tr>";
	foreach ($j as $value){
		echo "<td>".$value."</td>";
	}
	echo "</tr>";
}
echo "</table>";
?>
<form action="savecart.php" method="POST">
	選擇商品：
	<select name="id">
	<?php
	foreach($list as $i => $value){
		echo "<option value='s".$i."'>";
		echo $list[$i][0];
		echo "</option>";
		}
	?>
	</select>
	<input type="number" name="quantity" min="1" value="1" id="number" >
	<input type="submit" value="訂購" >
	</form>

	<hr/>
	<input type="button" value="檢視購物車"
	onclick="location.href='shoppingcart.php'" >
	&emsp;
	<input type="button" value="登出"
	onclick="location.href='logout.php'" >
	</center>
</body>
</html>

