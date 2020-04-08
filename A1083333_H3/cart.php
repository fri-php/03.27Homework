<!DOCTYPE html>
<html>
<head>
	<title>我的購物車</title>
	<style>
		th {font-weight:bold;  width: 10%;background-color:#F5F5DC}
		td:nth-child(even){text-align:center; width: 10%; background: #D4F1A6;}
		td:nth-child(odd) {text-align:center; width: 10%; background-color: #ADD8E6;}
	</style>
</head>
<body>
<p align="center">
<span style="font-size:26px" style="font-family:Microsoft JhengHei;"><b>購物車清單</b></span>
<table border="1" align="center">
<tr><th>功能</th><th>名稱</th><th>價格</th><th>編號</th><th>數量</th></tr>
<?php
$de1=1;
$de2=2;
$de3=3;
$totol=($_COOKIE["num1"]*12000)+($_COOKIE["num2"]*21000)+($_COOKIE["num3"]*27000);
if (isset($_COOKIE["buy1"])) 
{
	echo "<tr>"."<td>"."<a href='delete.php?de=$de1'>"."刪除"."</a>"."</td>"."<td>"."b001"."</td>"."<td>"."12000"."</td>"."<td>"."10吋平板電腦"."</td>"."<td>".$_COOKIE["num1"]."</td>"."</tr>";
}
if (isset($_COOKIE["buy2"])) 
{
	echo "<tr>"."<td>"."<a href='delete.php?de=$de2'>"."刪除"."</a>"."</td>"."<td>"."b002"."</td>"."<td>"."21000"."</td>"."<td>"."15吋筆記型電腦"."</td>"."<td>".$_COOKIE["num2"]."</td>"."</tr>";
}
if (isset($_COOKIE["buy3"])) 
{
	echo "<tr>"."<td>"."<a href='delete.php?de=$de3'>"."刪除"."</a>"."</td>"."<td>"."b003"."</td>"."<td>"."27000"."</td>"."<td>"."iPhone手機"."</td>"."<td>".$_COOKIE["num3"]."</td>"."</tr>";
}
echo "<tr>"."<td colspan='5'>"."總金額".$totol."</td>"."</tr>";
?>

</table>
<p align="center"><a href="catalog.php">返回</a></p>
</p>
</body>
</html>
