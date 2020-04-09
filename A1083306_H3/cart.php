<html>
<head>
<title>購物車</title>
</head>
<body>

<table border="1">
<tr><th>商品名稱</th><th>價錢</th><th>數量</th><th>操作</th>

<?php
$de1=1;
$de2=2;
$de3=3;
$de4=4;
$totol=($_COOKIE["number1"]*20)+($_COOKIE["number2"]*20)+($_COOKIE["number3"]*20)+($_COOKIE["number4"]*20);
if (isset($_COOKIE["item1"]))
{
	echo "<tr>"."<td>"."奶茶"."</td>"."<td>"."20"."</td>"."<td>".$_COOKIE["number1"]."</td>"."<td>"."<a href='delete.php?de=$de1'>"."刪除"."</a>"."</td>"."</tr>";
}
if (isset($_COOKIE["item2"]))
{
	echo "<tr>"."<td>"."紅茶"."</td>"."<td>"."20"."</td>"."<td>".$_COOKIE["number2"]."</td>"."<td>"."<a href='delete.php?de=$de2'>"."刪除"."</a>"."</td>"."</tr>";
}
if (isset($_COOKIE["item3"]))
{
	echo "<tr>"."<td>"."綠茶"."</td>"."<td>"."20"."</td>"."<td>".$_COOKIE["number3"]."</td>"."<td>"."<a href='delete.php?de=$de3'>"."刪除"."</a>"."</td>"."</tr>";
}
if (isset($_COOKIE["item4"]))
{
	echo "<tr>"."<td>"."特調"."</td>"."<td>"."20"."</td>"."<td>".$_COOKIE["number4"]."</td>"."<td>"."<a href='delete.php?de=$de4'>"."刪除"."</a>"."</td>"."</tr>";
}

echo "<tr>"."<td colspan='4'>"."總金額".$totol."</td>"."</tr>";

?> 


</table>
<br/>
<a href="catalog.php">返回<a/>

</body>
</html>