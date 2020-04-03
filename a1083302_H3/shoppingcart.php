<?php




	echo "<table  border='1'>".
	     "<tr> 
	          <td>功能</td>
	          <td>編號</td>
	          <td>名稱</td>
	          <td>價格</td>
	          <td>數量</td>
	    </tr>";
          
if(isset($_COOKIE["item"])){
	$sum=12000*$_COOKIE["number"];
	echo 
	     "<tr>". 
	          "<td>"."<form action='delete.php' method='POST'>"."<input type='submit' name='tb' value='刪除'>"."</form>"."</td>".
	          "<td>s001</td>".
	          "<td>".$_COOKIE["item"]."</td>".
	          "<td>12000</td>".
	          "<td>".$_COOKIE["number"]."</td>".          
         "</tr>";
	     
	}
	
if(isset($_COOKIE["item1"])){
	$sum1=20000*$_COOKIE["number1"];
	echo 
	     "<tr>". 
	          "<td>"."<form action='delete.php' method='POST'>"."<input type='submit' name='ip' value='刪除'>"."</form>"."</td>".
	          "<td>s002</td>".
	          "<td>".$_COOKIE["item1"]."</td>".
	          "<td>20000</td>".
	          "<td>".$_COOKIE["number1"]."</td>".          
         "</tr>";
	               

	}
	
if(isset($_COOKIE["item2"])){
	$sum2=27000*$_COOKIE["number2"];
	echo 
	     "<tr>".
	          "<td>"."<form action='delete.php' method='POST'>"."<input type='submit' name='nc' value='刪除'>"."</form>"."</td>".
	          "<td>s003</td>".
	          "<td>".$_COOKIE["item2"]."</td>".
	          "<td>27000</td>".
	          "<td>".$_COOKIE["number2"]."</td>".          
         "</tr>";
	}
	

$total=$sum+$sum1+$sum2;
echo
     "<tr>".
     "<td>總金額:".$total."</td>".
     "</tr>";		
echo "</table>";

?>


	