<body bgcolor="#FF8888">
<center>
<?php
	echo "<table  border='1'>".
	     "<tr> 
	          <td>功能</td>
	          <td>名稱</td>
	          <td>價格</td>
	          <td>數量</td>
	    </tr>";
          
if(isset($_COOKIE["first"])){
	$sum=50*$_COOKIE["amount"];
	echo 
	     "<tr>". 
	          "<td>"."<form action='delete.php' method='POST'>"."<input type='submit' name='tb' value='刪除'>"."</form>"."</td>".
	          "<td>".$_COOKIE["first"]."</td>".
	          "<td>50</td>".
	          "<td>".$_COOKIE["amount"]."</td>".          
         "</tr>";
	     
	}
	
if(isset($_COOKIE["second"])){
	$sum1=50*$_COOKIE["amount2"];
	echo 
	     "<tr>". 
	          "<td>"."<form action='delete.php' method='POST'>"."<input type='submit' name='ip' value='刪除'>"."</form>"."</td>".
	          "<td>".$_COOKIE["second"]."</td>".
	          "<td>50</td>".
	          "<td>".$_COOKIE["amount2"]."</td>".          
         "</tr>";
	               

	}
	
if(isset($_COOKIE["third"])){
	$sum2=1000*$_COOKIE["amount3"];
	echo 
	     "<tr>".
	          "<td>"."<form action='delete.php' method='POST'>"."<input type='submit' name='nc' value='刪除'>"."</form>"."</td>".
	          "<td>".$_COOKIE["third"]."</td>".
	          "<td>1000</td>".
	          "<td>".$_COOKIE["amount3"]."</td>".          
         "</tr>";
	}
	

$total=$sum+$sum1+$sum2;
echo
     "<tr>".
     "<td>總金額:".$total."</td>".
     "</tr>";		
echo "</table>";

?>

</center>
</body>

