<?php


echo "<center>";
echo "<table border='1'>";
$sum=0;

if (isset($_COOKIE["QUANTITY001"])) {
	echo "<tr>";
	echo "<td>";
	echo "<form action='delete.php' method='POST'>";
	echo "<input type='submit' name='S001' value='取消訂購'>";
	echo "</form>";
	echo "</td>";
	echo "<td>";
	echo "10吋變形平板";
	echo "</td>";
	echo "<td>";
	echo "<center>";
	echo $_COOKIE["QUANTITY001"];
	echo "</center>";
	echo "</td>";
	echo "</tr>";
	$quantity=$_COOKIE["QUANTITY001"];
	$sum=$sum+12000*$quantity;
}
if (isset($_COOKIE["QUANTITY002"])) {
	echo "<tr>";
	echo "<td>";
	echo "<form action='delete.php' method='POST'>";
	echo "<input type='submit' name='S002' value='取消訂購'>";
	echo "</form>";
	echo "</td>";
	echo "<td>";
	echo "15.6吋筆記型電腦";
	echo "</td>";
	echo "<td>";
	echo "<center>";
	echo $_COOKIE["QUANTITY002"];
	echo "</center>";
	echo "</td>";
	echo "</tr>";
	$quantity=$_COOKIE["QUANTITY002"];
	$sum=$sum+27000*$quantity;
}
if (isset($_COOKIE["QUANTITY003"])) {
	echo "<tr>";
	echo "<td>";
	echo "<form action='delete.php' method='POST'>";
	echo "<input type='submit' name='S003' value='取消訂購'>";
	echo "</form>";
	echo "</td>";
	echo "<td>";
	echo "iPhone手機";
	echo "</td>";
	echo "<td>";
	echo "<center>";
	echo $_COOKIE["QUANTITY003"];
	echo "</center>";
	echo "</td>";
	echo "</tr>";
	$quantity=$_COOKIE["QUANTITY003"];
	$sum=$sum+21000*$quantity;
}

if ($sum>0) {
	echo "<tr>";
	echo "<td>";
	echo "總金額";
	echo "</td>";
	echo "<td>";
	echo $sum;
	echo "</td>";
	echo "<td>";
	echo "<a href='catalog.php'>"."回訂購畫面繼續訂購"."</a>";
	echo "</td>";
	echo "</tr>";
	echo "</table>";
	echo "</center>";
}
else{
	echo "<center>";
	echo "<a href='catalog.php'>"."您尚未購買任何物品，返回購買頁面"."</a>";
	echo "</center>";
}

echo "</body>";

?>