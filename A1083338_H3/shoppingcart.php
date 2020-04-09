<html>
<head>
<title>shoppingcart</title>
</head>
<body>
<table border="1">

<?php
session_start();

	if($_SESSION["login"]==T){}
	else
	{
		header('Location:login.php');
	}
$price=0;
$num=0;
$total=0;
echo "<td>功能</td>"."<td>編號</td>"."<td>名稱</td>"."<td>價格</td>"."<td>數量</td>"."</tr>";
while(list($arr,$value)=each($_COOKIE))
{
	echo "<tr>";
	if(isset($_COOKIE[$arr])&&is_array($_COOKIE[$arr]))
		{
			echo "<td><a href='delete.php?ID=".$arr."'>"."刪除</a></td>";
			while(list($name,$value)=each($_COOKIE[$arr]))
			{
				echo"<td>".$value."</td>";
				if($name=="price")
					$price=$value;
				if($name=="num")
					$num=$value;
			}
			$total=$total+$price*$num;
			echo"</tr>";
			
		}
		
}
echo "<td>"."總金額= ".$total." 元"."</td>";

?>
</table>
<br><a href=catalog.php>Catalog</a>
<a href=logout.php>登出</a>
</html>