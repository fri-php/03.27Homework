<html>
<head>
<title>購物車(ゝ∀･)b</title>
</head>
<body>
<table border="0">
  <tr bgcolor="#4F4FFF">
   <td>編號</td>
   <td>名稱</td>
   <td>價格</td>
   <td>數量</td>
   <td>刪除</td>
  </tr>
<?php
$flag = false;  $total = 0;

while ( list($arr, $value) = each($_COOKIE) ) {
  
  if ( isset($_COOKIE[$arr]) && 
                   is_array($_COOKIE[$arr]) ) {
     if ($flag) {   
        $flag = True;
        $color="#D6D6FF";
     } else {
        $flag = False;
        $color="#D6D6FF";
     }
     $price = 0;
     $quantity = 0; 
     
     while ( list($name, $value)=each($_COOKIE[$arr])) 
     {
        echo "<td>" . $value . "</td>";
        if ($name == "Price")  $price = $value;
        if ($name == "Quantity") $quantity = $value;
     }
     echo "<tr bgcolor='#FFBFFF	".$color."'><td>";
     echo "<a href='delete.php?Id=".$arr."'>";
     echo "刪除</a></td>";
     $total += $price * $quantity;  
     echo "</tr>";
  }
}
if ($total != 0) {  
   echo "<tr bgcolor=#7878FF><td colspan=5 align=center>";
   echo "總共要付 = NT$".$total."元</td></tr>";
}
?>
</table>
<hr/><a href="catalog.php">商品有啥</a>
</body>
</html>
