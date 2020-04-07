<html>
<head>
</head>	
<body bgcolor="#ccffe6">

<form action="delete.php" method="POST">
<?php
session_start();
echo '<table border="1">
	<tr><td style="background-color:#ffffcc">功能</td><td style="background-color:#ffffcc">編號</td><td style="background-color:#ffffcc">名稱</td><td style="background-color:#ffffcc">價格</td><td style="background-color:#ffffcc">數量</td></tr>';
		

/*if(isset($_COOKIE["quantity1"]))
{
	echo '<tr><td><input type="submit" name="one" value="刪除" style="background-color:#ffccd9"></td><td style="background-color:#ffccd9">s001</td><td style="background-color:#ffccd9">'.$_SESSION["A"].'</td><td style="background-color:#ffccd9">$'.$_SESSION["a"].'</td><td style="background-color:#ffccd9">'.$_COOKIE["quantity1"].'</td></tr>';
}*/

if(isset($_COOKIE["quantity1"]))
{
	echo '<tr><td style="background-color:#ffccd9"><a href="delete.php?id=0">刪除</a></td><td style="background-color:#ffccd9">s001</td><td style="background-color:#ffccd9">'.$_SESSION["A"].'</td><td style="background-color:#ffccd9">$'.$_SESSION["a"].'</td><td style="background-color:#ffccd9">'.$_COOKIE["quantity1"].'</td></tr>';
}


if(isset($_COOKIE["quantity2"]))
{
	echo '<tr><td style="background-color:#ccffff"><a href="delete.php?id=1">刪除</a></td></td><td style="background-color:#ccffff">s002</td><td style="background-color:#ccffff">'.$_SESSION["B"].'</td><td style="background-color:#ccffff">$'.$_SESSION["b"].'</td><td style="background-color:#ccffff">'.$_COOKIE["quantity2"].'</td></tr>';
}

if(isset($_COOKIE["quantity3"]))
{
	echo '<tr><td style="background-color:#ffe6cc"><a href="delete.php?id=2">刪除</a></td></td><td style="background-color:#ffe6cc">s003</td><td style="background-color:#ffe6cc">'.$_SESSION["C"].'</td><td style="background-color:#ffe6cc">$'.$_SESSION["c"].'</td><td style="background-color:#ffe6cc">'.$_COOKIE["quantity3"].'</td></tr>';
}

$final=$_COOKIE["quantity1"]*$_SESSION["a"]+$_COOKIE["quantity2"]*$_SESSION["b"]+$_COOKIE["quantity3"]*$_SESSION["c"];
echo '<tr><td colspan="5" style="background-color:#cce6ff">總金額=NT$'.$final.'元</td></tr>';

echo '</table>';
echo '</br>';
echo '<a href="catalog.php">商品目錄</a></br>';

?>





</form>

</body>
</html>

<!--<table>
<tr><td>功能</td><td>編號</td><td>名稱</td><td>價格</td><td>數量</td></tr>
<tr><td><a href='delete.php'>刪除</a></td><td>$merchandise</td><td></td><td></td><td></td></tr>
<tr><td><a href='delete.php'>刪除</a></td><td></td><td></td><td></td><td></td></tr>
<tr><td><a href='delete.php'>刪除</a></td><td></td><td></td><td></td><td></td></tr>


</table>


