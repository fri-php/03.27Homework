<?php

session_start();

echo "<table  border='3'>".
	 "<tr><td>功能</td><td>編號</td><td>名稱</td><td>價格</td><td>數量</td></tr>";
	          
if(isset($_COOKIE["item1"])){
	$sum1=699*$_COOKIE["quantity1"];
	echo 
	     "<tr>".
	        "<td>"."<form action='delete.php' method='POST'>".
	        "<input type='submit' name='cf' value='移除'>"."</form>"."</td>". 	          
	        "<td>A001</td>"."<td>".$_COOKIE["item1"]."</td>".
	        "<td>699</td>"."<td>".$_COOKIE["quantity1"]."</td>".	                    
         "</tr>";	     
	}
	
if(isset($_COOKIE["item2"])){
	$sum2=650*$_COOKIE["quantity2"];
	echo 
	     "<tr>". 
	          "<td>"."<form action='delete.php' method='POST'>".
	          "<input type='submit' name='bp' value='移除'>"."</form>"."</td>".
	          "<td>A021</td>"."<td>".$_COOKIE["item2"]."</td>".	          
	          "<td>650</td>"."<td>".$_COOKIE["quantity2"]."</td>".
         "</tr>";	     
	}

if(isset($_COOKIE["item3"])){
	$sum3=199*$_COOKIE["quantity3"];
	echo 
	     "<tr>". 
	          "<td>"."<form action='delete.php' method='POST'>".
	          "<input type='submit' name='ks' value='移除'>"."</form>"."</td>".
	          "<td>A043</td>"."<td>".$_COOKIE["item3"]."</td>".	          
	          "<td>199</td>"."<td>".$_COOKIE["quantity3"]."</td>".	                    
         "</tr>";	     
	}

if(isset($_COOKIE["item4"])){
	$sum4=499*$_COOKIE["quantity4"];
	echo 
	     "<tr>". 
	          "<td>"."<form action='delete.php' method='POST'>".
	          "<input type='submit' name='it' value='移除'>"."</form>"."</td>".
	          "<td>A065</td>"."<td>".$_COOKIE["item4"]."</td>".	          
	          "<td>499</td>"."<td>".$_COOKIE["quantity4"]."</td>".	                    
         "</tr>";	     
	}

if(isset($_COOKIE["item5"])){
	$sum5=899*$_COOKIE["quantity5"];
	echo 
	     "<tr>". 
	          "<td>"."<form action='delete.php' method='POST'>".
	          "<input type='submit' name='tb' value='移除'>"."</form>"."</td>".
	          "<td>A087</td>"."<td>".$_COOKIE["item5"]."</td>".	          
	          "<td>899</td>"."<td>".$_COOKIE["quantity5"]."</td>".	                    
         "</tr>";	     
	}

if(isset($_COOKIE["item6"])){
	$sum6=699*$_COOKIE["quantity6"];
	echo 
	     "<tr>". 
	          "<td>"."<form action='delete.php' method='POST'>".
	          "<input type='submit' name='gb' value='移除'>"."</form>"."</td>".
	          "<td>A108</td>"."<td>".$_COOKIE["item6"]."</td>".	          
	          "<td>699</td>"."<td>".$_COOKIE["quantity6"]."</td>".	                    
         "</tr>";	     
	}		
					
$total=$sum1+$sum2+$sum3+$sum4+$sum5+$sum6;
echo "<tr>"."<td><br/><br/>總金額 =".$total."</td>"."</tr>";
echo "</table>";

?>

<title>www.ksapparel.com/shopping.php</title>
<center>
<form>
<body bgcolor="#F3D4FF" >


<br/><br/><br/><br/><a href="catalog.php">回商品目錄</a>

</form>
</center>