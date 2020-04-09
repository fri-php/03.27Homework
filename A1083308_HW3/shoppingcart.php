<?php
session_start();
error_reporting(0);
?>

<html>
<head>
	<link rel=stylesheet type="text/css" href="style.css">
	<title>A1083308 購物車</title>
</head>
<body>
<center>
	<table border="1">
		<tr>
			<th>功能</th>
			<th>編號</th>
			<th>名稱</th>
			<th>價格</th>
			<th>數量</th>
			
		</tr>
		<?php
			foreach ($_SESSION["list"] as $i => $j ) {
				if(isset($_COOKIE["s".$i])){
					echo "<tr>";
					echo "<td><a  href='delete.php?id=".$i."'>刪除</a></td>";
					echo "<td>s".$i."</td>";
					foreach ($j as $value){
						echo "<td>".$value."</td>";
					}
					echo "<td>".$_COOKIE["s".$i]."</td>";
					echo "</tr>";
				}
				else{
					$count++;
				}
				$total+=$_SESSION["list"][$i][1]*$_COOKIE["s".$i];
			}
			if($count==count($_SESSION["list"])){
				echo "<tr><td colspan='5' align='center'>購物車裡沒有商品......</td></tr>";
			}
			echo "<tr>";
			echo "<td colspan='5'>總金額=$".$total."</td>";
			echo "</tr>";
		?>
	</table>
	<hr/>
	<input type="button" value="回到商品目錄"
	onclick="location.href='catalog.php'" id="button" >
	&nbsp;
	<input type="button" value="登出"
	onclick="location.href='logout.php'" >
	</center>
</body>

</html>