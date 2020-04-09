<html>
<head>
<title>購物車清單</title>

</head>
<body>
<table border="1" align="center">
<tr><th>功能</th><th>名稱</th><th>價格</th><th>數量</th></tr>
<?php
$del1=1;
$del2=2;
$del3=3;
$total=($_COOKIE["num1"]*200)+($_COOKIE["num2"]*150)+($_COOKIE["num3"]*230);

if (isset($_COOKIE["buy1"]))
{
	echo "<tr>"."<td>"."<a href='delete.php?de=$del1'>"."刪除"."</a>"."</td>"."<td>"."杏仁脆片"."</td>"."<td>"."200"."</td>"."<td>".$_COOKIE["num1"]."</td>"."</tr>";

}
if (isset($_COOKIE["buy2"]))
{
	echo "<tr>"."<td>"."<a href='delete.php?de=$del2'>"."刪除"."</a>"."</td>"."<td>"."南瓜子脆片"."</td>"."<td>"."150"."</td>"."<td>".$_COOKIE["num2"]."</td>"."</tr>";

}
if (isset($_COOKIE["buy3"]))
{
	echo "<tr>"."<td>"."<a href='delete.php?de=$del3'>"."刪除"."</a>"."</td>"."<td>"."夏威夷豆脆片"."</td>"."<td>"."230"."</td>"."<td>".$_COOKIE["num3"]."</td>"."</tr>";

}
echo "<tr>"."<td colspan='4'>"."總金額".$total."</td>"."</tr>";
?>
</table>
</body>
</html>


