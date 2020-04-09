<?php

echo "<table border='1'>";
     "<tr>
          <td>功能</td>
	      <td>編號</td>
	      <td>名稱</td>
	      <td>價格</td>
	      <td>數量</td>
	 </tr>";
          
if(isset($_COOKIE["item"])){
	$sum1=10000*$_COOKIE["number"];
	echo 
	     "<tr>". 
	          "<td>"."<form action='delete.php' method='POST'>"."<input type='submit' name='tb' value='刪除'>"."</form>"."</td>".
	          "<td>s001</td>".
	          "<td>".$_COOKIE["item"]."</td>".
	          "<td>10000</td>".
	          "<td>".$_COOKIE["number"]."</td>".          
         "</tr>";
	     
	}
if(isset($_COOKIE["item1"])){
	$sum2=23000*$_COOKIE["number1"];
	echo 
	     "<tr>". 
	          "<td>"."<form action='delete.php' method='POST'>"."<input type='submit' name='ip' value='刪除'>"."</form>"."</td>".
	          "<td>s002</td>".
	          "<td>".$_COOKIE["item1"]."</td>".
	          "<td>23000</td>".
	          "<td>".$_COOKIE["number1"]."</td>".          
         "</tr>";
	               

	}
	
if(isset($_COOKIE["item2"])){
	$sum3=29000*$_COOKIE["number2"];
	echo 
	     "<tr>".
	          "<td>"."<form action='delete.php' method='POST'>"."<input type='submit' name='nc' value='刪除'>"."</form>"."</td>".
	          "<td>s003</td>".
	          "<td>".$_COOKIE["item2"]."</td>".
	          "<td>29000</td>".
	          "<td>".$_COOKIE["number2"]."</td>".          
         "</tr>";
	}
	

$total=$sum1+$sum2+$sum3;
echo
     "<tr>".
     "<td>總金額:".$total."</td>".
     "</tr>";		
echo "</table>";
?>