<?php
session_start();
echo "<table border='1'>";
echo "<tr>";
echo "<td>功能</td>";
echo "<td>編號</td>";
echo "<td>名稱</td>";
echo "<td>價格</td>";
echo "<td>數量</td>";
echo "<tr>";
if(isset($_COOKIE["item1"]))
{
 "<table border='1'>";
echo "<tr>";
echo "<td>"."<form action='delete.php' method='POST'>"."<input type='submit' name='tb' value='刪除'>"."</form>"."</td>";
echo "<td>S001</td>";
echo "<td>".$_COOKIE["item1"]."</td>";
echo "<td>12000</td>";
echo "<td>".$_COOKIE["quantity1"]."</td>";
echo "<tr>";
}
if(isset($_COOKIE["item2"]))
{
"<table border='1'>";
echo "<tr>";
echo "<td>"."<form action='delete.php' method='POST'>"."<input type='submit' name='lp' value='刪除'>"."</form>"."</td>";
echo "<td>S002</td>";
echo "<td>".$_COOKIE["item2"]."</td>";
echo "<td>27000</td>";
echo "<td>".$_COOKIE["quantity2"]."</td>";
echo "<tr>";
}
if(isset($_COOKIE["item3"]))
{
"<table border='1'>";
echo "<tr>";
echo "<td>"."<form action='delete.php' method='POST'>"."<input type='submit' name='ip' value='刪除'>"."</form>"."</td>";
echo "<td>S003</td>";
echo "<td>".$_COOKIE["item3"]."</td>";
echo "<td>21000</td>";
echo "<td>".$_COOKIE["quantity3"]."</td>";
echo "<tr>";
}
$sum=12000*$_COOKIE["quantity1"]+27000*$_COOKIE["quantity2"]+21000*$_COOKIE["quantity3"];
"<table border='1'>";
echo "<tr>";
echo "<td>總金額=</td>";
echo "<td>".$sum."</td>";
echo "<tr>";

?>