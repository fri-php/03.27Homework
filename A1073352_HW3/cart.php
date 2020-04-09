  
<html>
<head>
	<title></title>
	<style>
		
		th {font-weight:bold;  width: 10%;background-color:#CFCFCF}
		td:nth-child(even){text-align:center; width: 10%; }
		td:nth-child(odd) {text-align:center; width: 10%; }
	</style>
</head>
<body>
<p align="center">
<span style="font-size:30px" ><h2 align="center">Crispy Family</h2></span>
</p>
</p>
<table border="2" align="center">

<tr><th>功能</th><th>商品名稱</th><th>金額</th><th>代碼</th><th>數量</th></tr>
<?php
$de1=1;
$de2=2;
$de3=3;
$de4=4;
$de5=5;
$total=($_COOKIE["num1"]*75)+($_COOKIE["num2"]*75)+($_COOKIE["num3"]*75)+($_COOKIE["num4"]*75)+($_COOKIE["num5"]*75);
if (isset($_COOKIE["buy1"])) 
{
	echo "<tr>"."<td>"."<a href='delete.php?de=$de1'>"."刪除"."</a>"."</td>"."<td>"."【1 for one 挺好】帥薯薯馬鈴薯條"."</td>"."<td>"."75"."</td>"."<td>"."01"."</td>"."<td>".$_COOKIE["num1"]."</td>"."</tr>";
}
if (isset($_COOKIE["buy2"])) 
{
	echo "<tr>"."<td>"."<a href='delete.php?de=$de2'>"."刪除"."</a>"."</td>"."<td>"."【1 for one 挺好】蔬菜脆片"."</td>"."<td>"."75"."</td>"."<td>"."02"."</td>"."<td>".$_COOKIE["num2"]."</td>"."</tr>";
}
if (isset($_COOKIE["buy3"])) 
{
	echo "<tr>"."<td>"."<a href='delete.php?de=$de3'>"."刪除"."</a>"."</td>"."<td>"."【1 for one 挺好】 大燕麥千層棒"."</td>"."<td>"."75"."</td>"."<td>"."03"."</td>"."<td>".$_COOKIE["num3"]."</td>"."</tr>";
}
if (isset($_COOKIE["buy4"])) 
{
	echo "<tr>"."<td>"."<a href='delete.php?de=$de4'>"."刪除"."</a>"."</td>"."<td>"."【1 for one 挺好】燕麥可可Bar"."</td>"."<td>"."75"."</td>"."<td>"."04"."</td>"."<td>".$_COOKIE["num4"]."</td>"."</tr>";
}
if (isset($_COOKIE["buy5"])) 
{
	echo "<tr>"."<td>"."<a href='delete.php?de=$de5'>"."刪除"."</a>"."</td>"."<td>"."【1 for one 挺好】水果脆片"."</td>"."<td>"."75"."</td>"."<td>"."05"."</td>"."<td>".$_COOKIE["num5"]."</td>"."</tr>";
}
echo "<tr>"."<td colspan='5'>"."總金額：".$total."</td>"."</tr>";
?>

</table>
</p>
<p align="center"><a href="catalog.php">返回</a></p>
</p>
</body>
</html>