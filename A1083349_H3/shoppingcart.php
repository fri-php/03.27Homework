<html>
<?php
echo "<center>";
echo "<table border='1'>";
$sum=0;
if (isset($_COOKIE["q1"])) 
{
	echo "<tr>";
	echo "<td>";
	echo "<form action='delete.php' method='POST'>";
	echo "<input type='submit' name='computer' value='取消訂購'>";
	echo "</form>";
	echo "</td>";
	echo "<td>";
	echo "電腦";
	echo "</td>";
	echo "<td>";
	echo $_COOKIE["q1"];
	echo "</td>";
	echo "</tr>";
	$quantity=$_COOKIE["q1"];
	$sum=$sum+10000*$quantity;
}
if (isset($_COOKIE["q2"])) 
{
	echo "<tr>";
	echo "<td>";
	echo "<form action='delete.php' method='POST'>";
	echo "<input type='submit' name='phone' value='取消訂購'>";
	echo "</form>";
	echo "</td>";
	echo "<td>";
	echo "手機";
	echo "</td>";
	echo "<td>";
	echo $_COOKIE["q2"];
	echo "</td>";
	echo "</tr>";
	$quantity=$_COOKIE["q2"];
	$sum=$sum+9000*$quantity;
}
if (isset($_COOKIE["q3"])) 
{
	echo "<tr>";
	echo "<td>";
	echo "<form action='delete.php' method='POST'>";
	echo "<input type='submit' name='telephone' value='取消訂購'>";
	echo "</form>";
	echo "</td>";
	echo "<td>";
	echo "電話";
	echo "</td>";
	echo "<td>";
	echo $_COOKIE["q3"];
	echo "</td>";
	echo "</tr>";
	$quantity=$_COOKIE["q3"];
	$sum=$sum+8000*$quantity;
}

if ($sum>0) 
{
	echo "<tr>";
	echo "<td>";
	echo $sum;
	echo "</td>";
	echo "</tr>";
	echo "</table>";
	echo "</center>";
}
?>
</html>