<html>
<?php

echo "<body bgcolor='#eebbf7'>";

echo "<center>";
echo "<table border='1'>";
$sum=0;

echo "<br/><br/><br/><tr>";
echo "<td>";
echo "刪除";
echo "</td>";
echo "<td>";
echo "項目";
echo "</td>";
echo "<td>";
echo "價格";
echo "</td>";
echo "<td>";
echo "數量";
echo "</td>";
echo "</tr>";


if (isset($_COOKIE["QUANTITY001"])) 
{
	echo "<tr>";
	echo "<td>";
	echo "<form action='delete.php' method='POST'>";
	echo "<input type='submit' name='a001' value='取消訂購'>";
	echo "</form>";
	echo "</td>";
	echo "<td>";
	echo "10吋變形平板";
	echo "</td>";
	echo "<td align='right'>";
	echo "12000";
	echo "</td>";
	echo "<td align='right'>";
	echo $_COOKIE["QUANTITY001"];
	echo "</td>";
	echo "</tr>";
	$quantity=$_COOKIE["QUANTITY001"];
	$sum=$sum+12000*$quantity;
}
if (isset($_COOKIE["QUANTITY002"])) 
{
	echo "<tr>";
	echo "<td>";
	echo "<form action='delete.php' method='POST'>";
	echo "<input type='submit' name='a002' value='取消訂購'>";
	echo "</form>";
	echo "</td>";
	echo "<td>";
	echo "15.6吋筆記型電腦";
	echo "</td>";
	echo "<td align='right'>";
	echo "27000";
	echo "</td>";
	echo "<td align='right'>";
	echo $_COOKIE["QUANTITY002"];
	echo "</td>";
	echo "</tr>";
	$quantity=$_COOKIE["QUANTITY002"];
	$sum=$sum+27000*$quantity;
}
if (isset($_COOKIE["QUANTITY003"])) 
{
	echo "<tr>";
	echo "<td>";
	echo "<form action='delete.php' method='POST'>";
	echo "<input type='submit' name='a003' value='取消訂購'>";
	echo "</form>";
	echo "</td>";
	echo "<td>";
	echo "iPhone手機";
	echo "</td>";
	echo "<td align='right'>";
	echo "21000";
	echo "</td>";
	echo "<td align='right'>";
	echo $_COOKIE["QUANTITY003"];
	echo "</td>";
	echo "</tr>";
	$quantity=$_COOKIE["QUANTITY003"];
	$sum=$sum+21000*$quantity;
}

if ($sum>0) 
{
	echo "<tr>";
	echo "<td>";
	echo "<a href='catalog.php'>"."回訂購畫面繼續訂購"."</a>";
	echo "</td>";
	echo "<td>";
	echo "總金額";
	echo "</td>";
	echo "<td>";
	echo $sum;
	echo "</td>";
	echo "</tr>";
	
}
else
{
	echo "<center>";
	echo "<br/>"."<a href='catalog.php'>"."您尚未購買任何物品，返回購買頁面"."</a>";
	echo "</center>";
}

echo "</table>";
echo "</center>";
echo "</body>";

?>
</html>