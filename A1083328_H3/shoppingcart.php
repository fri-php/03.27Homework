<!DOCTYPE html>
<head>
	<title>Shopping Cart</title>
</head>

<body style="background-color:blue;">
<h2>Your Shopping Cart~</h2>

<table border="0">
	<tr bgcolor="#F1A90F">
		<td>Function</td><td>Num</td><td>Product</td><td>Price</td><td>Quantity</td>
	</tr>

<?php

$flag = false;  $total = 0;
while (list($array, $value) = each($_COOKIE)) {
  	if (isset($_COOKIE[$array]) && is_array($_COOKIE[$array])) {
    	if ($flag) {   
       		$flag = false;
       		$color="#F1D60F";
    	} else {
       		$flag = true;
       		$color="EAF10F";
    	}

    echo "<tr bgcolor='".$color."'><td>";
    echo "<a href='delete.php?Id=".$array."'>";
    echo "Delete</a></td>";
    $price = 0;
    $quantity = 0;

    while (list($name, $value) = each($_COOKIE[$array])) {

    	echo "<td>".$value."</td>";
        if($name == "Price") $price = $value;
        if($name == "Qty") $quantity = $value;

     }
     $total += $price*$quantity;
     echo "</tr>";
  }
}

if ($total != 0) { 
   echo "<tr bgcolor=#C8F10F><td colspan=5 align=right>";
   echo "Total Price = ".$total." NTD</td></tr>";
}
?>
</table></br>

<a href="catalog.php">Product List</a>
<a href='login.php'>Back to login page</a>
</body>
</html>