<html>
<meta charset="utf-8">
<center>
<style>
table, th, td 
{
  border: 1px solid black;
  table-layout: fixed;
}
</style>
<h1><font color="#bf00ff">你的購物車</font></h1>
<table bgcolor="#FFFACD" style="width:60%">
	<tr>
	<td bgcolor="#e6e6e6"></td>
	<td bgcolor="#b3d9ff">編號</td>
	<td bgcolor="#b3d9ff">商品</td>
	<td bgcolor="#b3d9ff">價格</td>
	<td bgcolor="#b3d9ff">數量</td>
	</tr>
<?php
session_start();
$sum="0";
if(isset($_COOKIE["ITEM001"])){
	echo "<tr>";
	echo "<td bgcolor='#ccffcc'>";
	echo "<a href='delete.php?id=1'>刪除<br/></a>";
	echo "</td>";
	echo "<td>";
	echo $_COOKIE["ITEM001"];
	echo "</td>";
	echo "<td>";
	echo "22型液晶電腦";
	echo "</td>";
	echo "<td>";
	echo "$13900";
	echo "</td>";
	echo "<td>";
	echo $_COOKIE["NUM001"];
	echo "</td>";
	$sum+=13900*$_COOKIE["NUM001"];
}
if(isset($_COOKIE["ITEM002"])){
	echo "<tr>";
	echo "<td bgcolor='#ccffcc'>";
	echo "<a href='delete.php?id=2'>刪除<br/></a>";
	echo "</td>";
	echo "<td>";
	echo $_COOKIE["ITEM002"];
	echo "</td>";
	echo "<td>";
	echo "Xbox控制器";
	echo "</td>";
	echo "<td>";
	echo "$1390";
	echo "</td>";
	echo "<td>";
	echo $_COOKIE["NUM002"];
	echo "</td>";
	$sum+=1390*$_COOKIE["NUM002"];
}
if(isset($_COOKIE["ITEM003"])){
	echo "<tr>";
	echo "<td bgcolor='#ccffcc'>";
	echo "<a href='delete.php?id=3'>刪除<br/></a>";
	echo "</td>";
	echo "<td>";
	echo $_COOKIE["ITEM003"];
	echo "</td>";
	echo "<td>";
	echo "2TB行動硬碟";
	echo "</td>";
	echo "<td>";
	echo "$2388";
	echo "</td>";
	echo "<td>";
	echo $_COOKIE["NUM003"];
	echo "</td>";
	$sum+=2388*$_COOKIE["NUM003"];
}
if(isset($_COOKIE["ITEM004"])){
	echo "<tr>";
	echo "<td bgcolor='#ccffcc'>";
	echo "<a href='delete.php?id=4'>刪除<br/></a>";
	echo "</td>";
	echo "<td>";
	echo $_COOKIE["ITEM004"];
	echo "</td>";
	echo "<td>";
	echo "記憶卡多槽讀卡機";
	echo "</td>";
	echo "<td>";
	echo "$599";
	echo "</td>";
	echo "<td>";
	echo $_COOKIE["NUM004"];
	echo "</td>";
	$sum+=599*$_COOKIE["NUM004"];
}
	echo "<tr>";
	echo "<td colspan='5' align='right' bgcolor='#ecb3ff'>";
	echo "總價=NT$";
	echo $sum;
	echo "元";
	echo "</td>";
?>
</table>
<a href="catalog.php">繼續購物<br/></a>
<a href='logout.php'>放棄並登出</a>
</center>
</html>