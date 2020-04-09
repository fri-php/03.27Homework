<?php

session_start();

if($_SESSION["login"]!="true")
	header("location:login.php?err=2");

?>

<html>

<head>
	<meta charset="utf-8">
	<title>A1083345 購物車介面</title>
</head>

<style>
	a{
		color: red;
		text-decoration: none;
	}
</style>

<body bgcolor="#F8F9F9">

	<font face="微軟正黑體">

		<table border="0">

			<tr align="center" bgcolor="#85C1E9">
				<th width="50">編號</th>
				<th width="200">名稱</th>
				<th width="80">單價</th>
				<th width="50">數量</th>
				<th width="50">功能</th>
			</tr>

			<?php
			for($i=0; $i<count($_SESSION["mdse"]); $i++)
			{
				if(isset($_COOKIE["S".$i]))
				{
					echo "<tr bgcolor='#D7DBDD'>";
					echo "<td align='center'>S".$i."</td>";
					echo "<td>".$_SESSION["mdse"][$i][0]."</td>";
					echo "<td>$".$_SESSION["mdse"][$i][1]."</td>";
					echo "<td align='center'>".$_COOKIE["S".$i]."</td>";
					echo "<td align='center'><a href='delete.php?id=".$i."'>刪除</a></td>";
					echo "</tr>";
				}
				else
					$nb_count++;

				$total+=$_COOKIE["S".$i]*$_SESSION["mdse"][$i][1];
			}

			if($nb_count==count($_SESSION["mdse"]))
				echo "<tr><td colspan='5' align='center' bgcolor='#D7DBDD'>購物車內尚無物品……</td></tr>";	
			?>

			<tr>
				<td colspan="5" align="right" bgcolor="#FADBD8">總金額=$<?php echo $total; ?></td>
			</tr>

		</table><hr>

		<input type="button" value="返回商品目錄" style="background-color:#D5F5E3" onclick="location.href='catalog.php'">

	</font>

</body>

</html>