<html>

<head>
<title>訂購頁面</title>	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body bgcolor="#FFCCCC">	
</body>


<center>	
<?php

header("Content-Type:text/html; charset=utf-8");


echo 
"<h1>請查看您的購物明細</h1><br/>".
"<table border='1'; style='font-size:25px; background-color:black;'>
<tr>
<th style='background-color:#FFFFBB'>功能</th>
<th style='background-color:#FFFFBB'>名稱</th>
<th style='background-color:#FFFFBB'>數量</th>
<th style='background-color:#FFFFBB'>價格</th>
</tr>";

if(isset($_COOKIE["good1"])){	
echo
"<tr>
<td style='background-color:#AAFFEE'><a href='delete.php?id=0'>刪除</a></td>
<td style='background-color:#AAFFEE'>小熊軟糖</td>
<td style='background-color:#AAFFEE'>";echo $_COOKIE["amount1"]; echo"</td>
<td style='background-color:#AAFFEE'>50</td>
</tr>";
}
if(isset($_COOKIE["good2"])){
echo 
"<tr>
<td style='background-color:#CCFF99'><a href='delete.php?id=1'>刪除</a></td>
<td style='background-color:#CCFF99'>巧克力</td>
<td style='background-color:#CCFF99'>";echo $_COOKIE["amount2"];echo "</td>
<td style='background-color:#CCFF99'>50</td>
</tr>";
}
if(isset($_COOKIE["good3"])){
echo
"<tr>
<td style='background-color:#E8CCFF'><a href='delete.php?id=2'>刪除</a></td>
<td style='background-color:#E8CCFF'>綜合禮包</td>
<td style='background-color:#E8CCFF'>";echo $_COOKIE["amount3"] ;echo "</td>
<td style='background-color:#E8CCFF'>99</td>
</tr>";
}

echo 
"<tr>
<td colspan='4' style='background-color:#DDDDDD;text-align:right;'>

總價=";
echo (50*$_COOKIE["amount1"])+(50*$_COOKIE["amount2"])+(99*$_COOKIE["amount3"]) ;

echo
"</td>
</tr>
</table>";
echo "<a href='catalog.php'>繼續購買</a>";

?>
</center>
</html>