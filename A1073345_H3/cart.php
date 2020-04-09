<html>
<head>
	<title></title>
	<style>
		body {background-color: #F4E1C6;}
		h2   {color: #D2691E;}
		th {font-weight:bold;  width: 10%;background-color:#F5F5DC}
		td:nth-child(even){text-align:center; width: 10%; background: #FAFAD2;}
		td:nth-child(odd) {text-align:center; width: 10%; background-color: #F0FFF0;}
	</style>
</head>
<body>
<p align="center">
<span style="font-size:30px" ><h2 align="center">購物車清單</h2></span>
</p>
</p>
<table align=center style="border:3px #E76781 solid;padding:5px;" rules="all" cellpadding='5';>

<tr><th>功能</th><th>商品名稱</th><th>金額</th><th>代碼</th><th>數量</th></tr>
<?php
$del1=1;
$del2=2;
$del3=3;
$del4=4;
$del5=5;
$total=($_COOKIE["num1"]*75)+($_COOKIE["num2"]*75)+($_COOKIE["num3"]*75)+($_COOKIE["num4"]*75)+($_COOKIE["num5"]*75);
if (isset($_COOKIE["buy1"])) 
{
	echo "<tr>"."<td>"."<a href='delete.php?del=$del1'>"."刪除"."</a>"."</td>"."<td>"."【1 for one 挺好】帥薯薯馬鈴薯條"."</td>"."<td>"."75"."</td>"."<td>"."a"."</td>"."<td>".$_COOKIE["num1"]."</td>"."</tr>";
}
if (isset($_COOKIE["buy2"])) 
{
	echo "<tr>"."<td>"."<a href='delete.php?del=$del2'>"."刪除"."</a>"."</td>"."<td>"."【1 for one 挺好】蔬菜脆片"."</td>"."<td>"."75"."</td>"."<td>"."b"."</td>"."<td>".$_COOKIE["num2"]."</td>"."</tr>";
}
if (isset($_COOKIE["buy3"])) 
{
	echo "<tr>"."<td>"."<a href='delete.php?del=$del3'>"."刪除"."</a>"."</td>"."<td>"."【1 for one 挺好】 大燕麥千層棒"."</td>"."<td>"."75"."</td>"."<td>"."c"."</td>"."<td>".$_COOKIE["num3"]."</td>"."</tr>";
}
if (isset($_COOKIE["buy4"])) 
{
	echo "<tr>"."<td>"."<a href='delete.php?del=$del4'>"."刪除"."</a>"."</td>"."<td>"."【1 for one 挺好】燕麥可可Bar"."</td>"."<td>"."75"."</td>"."<td>"."d"."</td>"."<td>".$_COOKIE["num4"]."</td>"."</tr>";
}
if (isset($_COOKIE["buy5"])) 
{
	echo "<tr>"."<td>"."<a href='delete.php?del=$del5'>"."刪除"."</a>"."</td>"."<td>"."【1 for one 挺好】水果脆片"."</td>"."<td>"."75"."</td>"."<td>"."e"."</td>"."<td>".$_COOKIE["num5"]."</td>"."</tr>";
}
echo "<tr>"."<td colspan='5'>"."總金額：".$total."</td>"."</tr>";
?>

</table>
</p>
<p align="center"><a href="catalog.php">返回</a></p>
</p>
</body>
</html>