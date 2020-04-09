<html>

<head>
	<title>A1083343 購物車</title>
</head>

<body bgcolor="#F9F5CA">
<table border="1">
<tr> 
  <td></td>
  <td>商品名稱</td>
  <td>商品價錢</td>
　<td>商品數量</td>

　</tr>
<?php
$del1=1;
$del2=2;
$del3=3;
$del4=4;

$totle=($_COOKIE["number1"]*30)+($_COOKIE["number2"]*25)+($_COOKIE["number3"]*30)+($_COOKIE["number4"]*40);

if(isset($_COOKIE["goods1"]))
{
	echo "<tr>"."<td>"."<a href='delete.php?del=$del1'>"."刪除"."</a>"."</td>"."<td>"."可樂"."</td>"."<td>"."$30"."</td>"."<td>".$_COOKIE["number1"]."</td>"."</tr>";
}

if(isset($_COOKIE["goods2"]))
{
	echo "<tr>"."<td>"."<a href='delete.php?del=$del2'>"."刪除"."</a>"."</td>"."<td>"."水"."</td>"."<td>"."$25"."</td>"."<td>".$_COOKIE["number2"]."</td>"."</tr>";
}

if(isset($_COOKIE["goods3"]))
{
	echo "<tr>"."<td>"."<a href='delete.php?del=$del3'>"."刪除"."</a>"."</td>"."<td>"."果汁"."</td>"."<td>"."$30"."</td>"."<td>".$_COOKIE["number3"]."</td>"."</tr>";
}

if(isset($_COOKIE["goods4"]))
{
	echo "<tr>"."<td>"."<a href='delete.php?del=$del4'>"."刪除"."</a>"."</td>"."<td>"."酒"."</td>"."<td>"."$40"."</td>"."<td>".$_COOKIE["number4"]."</td>"."</tr>";
}

echo "<tr>"."<td colspan='4'>"."總金額".$totle."</td>"."</tr>";
?>
</table>
<a href="http://localhost/catalog.php"><input type ="button" value="回到購物網站"></input>


</body>
</html>
