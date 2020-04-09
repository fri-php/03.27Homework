<?php
session_start();
if(isset($_SESSION["login"]))
{
$q1=$_COOKIE["Quantity1"];
$n1=$_COOKIE["Name1"];
$p1=$_COOKIE["Price1"];
$i1=$_COOKIE["ID1"];
$q2=$_COOKIE["Quantity2"];
$n2=$_COOKIE["Name2"];
$p2=$_COOKIE["Price2"];
$i2=$_COOKIE["ID2"];
$q3=$_COOKIE["Quantity3"];
$n3=$_COOKIE["Name3"];
$p3=$_COOKIE["Price3"];
$i3=$_COOKIE["ID3"];
$t=0;
$c=1;
$t1+=$p1*$q1;
$t2+=$p2*$q2;
$t3+=$p3*$q3;
$t=$t1+$t2+$t3;

echo "<table style=border:1px padding:5px rules=all cellpadding=5><tr><th width=80>商品名稱</th><th width=80>單價</th><th width=80>個數</th><th width=80>刪除</th>";
if(isset($_COOKIE["ID1"]))
{
	echo "<tr bgcolor=#FF99CC><td>".$n1."</td>";
	echo "<td>".$p1."</td>";
	echo "<td>".$q1."</td>";
	echo "<td><form action='delete.php' method=POST><input type=submit value=delete name='1' bgcolor=#FF99CC></td>";
}
if(isset($_COOKIE["ID2"]))
{
	echo "<tr bgcolor=#FF99CC><td>".$n2."</td>";
	echo "<td>".$p2."</td>";
	echo "<td>".$q2."</td>";
	echo "<td><form action=delete.php method=POST><input type=submit value=delete name='2' bgcolor=#FF99CC></td>";
}
if(isset($_COOKIE["ID3"]))
{
	echo "<tr bgcolor=#FF99CC><td>".$n3."</td>";
	echo "<td>".$p3."</td>";
	echo "<td>".$q3."</td>";
	echo "<td><form action=delete.php method=POST><input type=submit value=delete name='3' bgcolor=#FF99CC></td>";
}

echo "一共為".$t."元";
echo "<a href=catalog.php>查看目錄</a>";
}
else
{
	header('location:shoplogin.php');
}
?>