<?php
echo "<table border='1'>
<tr>
<td>功能</td>
<td>編號</td>
<td>名稱</td>
<td>價格</td>
<td>數量</td>
</tr>";

if(isset($_COOKIE["item1"])){
	$sum1=12000*$_COOKIE["quantity1"];
	echo 
	     "<tr>". 
	          "<td>"."<form action='delete.php' method='POST'>"."<input type='submit' name='tab' value='delete'>"."</form>"."</td>".
	          "<td>s001</td>".
	          "<td>".$_COOKIE["item1"]."</td>".
	          "<td>12000</td>".
	          "<td>".$_COOKIE["quantity1"]."</td>".          
         "</tr>";
	     
	}

if (isset($_COOKIE["item2"])) {
	$sum2=20000*$_COOKIE["quantity2"];
	echo "<tr>".
	        "<td>"."<form action='delete.php' method='POST'>"."<input type='submit' name='pho' value='delete'>"."</form>"."</td>".
	        "<td>s002</td>".
	        "<td>".$_COOKIE["item2"]."</td>".
	        "<td>20000</td>".
	        "<td>".$_COOKIE["quantity1"]."</td>".
			"</tr>";
}

if (isset($_COOKIE["item3"])) {
	$sum3=27000*$_COOKIE["quantity3"];
	echo "<tr>".
	        "<td>"."<form action='delete.php' method='POST'>"."<input type='submit' name='note' value='delete'>"."</form>"."</td>".
	        "<td>s003</td>".
	        "<td>".$_COOKIE["item3"]."</td>".
	        "<td>27000</td>".
	        "<td>".$_COOKIE["quantity3"]."</td>".
			"</tr>";	
}

$price=$sum1+$sum2+$sum3;
echo
     "<tr>".
     "<td>總金額:".$price."</td>".
     "</tr>".		
 "</table>";
 ?>
<hr>
<form>
<a href="catalog.php">返回目錄
</a>
&nbsp&nbsp&nbsp
<a href="logout(hw).php">登出
</a>
</form>








