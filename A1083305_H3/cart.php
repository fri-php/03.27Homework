<html>
<font face="微軟正黑體, Arial">
<style>
table, th, td {
  border: 2px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
}
</style>
<head>
<style>
        html {
            height: 95%;
        }

        body {
            background-image: url(擷取3.PNG);
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }
</style>
</head>
<?php
echo "<center>";
echo "<table>";
echo "<tr><td><center>功能</center></td><td><center>商品</center></td><td>單價</td><td>數量</td></tr>";


if (isset($_COOKIE["PRODUCT1"])){
	echo "<form  action='delete.php' method='POST'>";
	echo "<tr><td>"."<input type='submit' name='a1' value='刪除'>"."</td>";
	echo "</form>";
	echo "<td>平板電腦</td>";
	echo "<td>200</td>";
	echo "<td>".$_COOKIE["NUMBER1"]."</td></tr>";
}

if (isset($_COOKIE["PRODUCT2"])){
	echo "<form  action='delete.php' method='POST'>";
	echo "<tr><td>"."<input type='submit' name='a2' value='刪除'>"."</td>";
	echo "</form>";
	echo "<td>手機</td>";
	echo "<td>100</td>";
	echo "<td>".$_COOKIE["NUMBER2"]."</td></tr>";
}

if (isset($_COOKIE["PRODUCT3"])){
	echo "<form  action='delete.php' method='POST'>";
	echo "<tr><td>"."<input type='submit' name='a3' value='刪除'>"."</td>";
	echo "</form>";
	echo "<td>水果</td>";
	echo "<td>50</td>";
	echo "<td>".$_COOKIE["NUMBER3"]."</td></tr>";
}

if (isset($_COOKIE["PRODUCT4"])){
	echo "<form  action='delete.php' method='POST'>";
	echo "<tr><td>"."<input type='submit' name='a4' value='刪除'>"."</td>";
	echo "</form>";
	echo "<td>蔬菜</td>";
	echo "<td>20</td>";
	echo "<td>".$_COOKIE["NUMBER4"]."</td></tr>";
}

if (isset($_COOKIE["PRODUCT5"])){
	echo "<form  action='delete.php' method='POST'>";
	echo "<tr><td>"."<input type='submit' name='a5' value='刪除'>"."</td>";
	echo "</form>";
	echo "<td>肉類</td>";
	echo "<td>1000</td>";
	echo "<td>".$_COOKIE["NUMBER5"]."</td></tr>";
}
echo "</table>";
echo "</center>"
?>
</font>
</html>