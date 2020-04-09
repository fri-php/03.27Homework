<?php
session_start();
echo "<body bgcolor='#fff8dc'>";
echo "<h2>"."<b>"."購買清單"."</b>"."</h2>";
echo "</body>";
echo "<table border='1'>";
		echo "<tr>";
			echo "<td width='100' align='center'>"."功能"."</td>";
			echo "<td width='100' align='center'>"."編號"."</td>";
			echo "<td width='100' align='center'>"."名稱"."</td>";
			echo "<td width='100' align='center'>"."價格"."</td>";
			echo "<td width='100' align='center'>"."數量"."</td>";
		echo "</tr>";

if (isset($_SESSION["choosena"])){
		echo "<tr>";
			echo "<td align='center'>"."<a href = 'delete.php'>"."刪除"."</a>"."</td>";
			echo "<td align='center'>".$_SESSION["chooseid"]."</td>";
			echo "<td align='center'>".$_SESSION["choosena"]."</td>";
			echo "<td align='center'>".$_SESSION["chooseprice"]."</td>";
			echo "<td align='center'>".$_SESSION["choosenum"]."</td>";
		echo "</tr>";
}

$total=$_SESSION["chooseprice"]*$_SESSION["choosenum"];

echo "<tr>";
echo "<td colspan='5' align='right'>"."總金額=NT".$total."元";
echo "</tr>";
echo "</table>";

echo "<a href='catalog.php'>"."商品目錄"."&nbsp;&nbsp;&nbsp;&nbsp;"."</a>";
echo "<a href='shoppingcart.php'>"."檢視購物車</a>";


$_SESSION["shoppingcart"]["001"]["chooseid"]="001";
$_SESSION["shoppingcart"]["001"]["choosena"]="15.6吋筆記型電腦";
$_SESSION["shoppingcart"]["001"]["chooseprice"]=27000;
$_SESSION["shoppingcart"]["002"]["chooseid"]="002";
$_SESSION["shoppingcart"]["002"]["choosena"]="iPhone手機";
$_SESSION["shoppingcart"]["002"]["chooseprice"]=21000;
$_SESSION["shoppingcart"]["003"]["chooseid"]="003";
$_SESSION["shoppingcart"]["003"]["choosena"]="10吋變形平板";
$_SESSION["shoppingcart"]["003"]["chooseprice"]=12000;
$dataSUM = count($_SESSION["shoppingcart"]);
echo $_SESSION["shoppingcart"][$dataSUM]["chooseid"];







?>