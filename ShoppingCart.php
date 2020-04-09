<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8" />
            <title>ShoppingCart.php</title>
        </head>
        <body >
            <table border="0">
            <tr bgcolor="#AAAAFF">
            <td>功能</td><td>編號</td><td>名稱</td>
            <td>價格</td><td>數量</td></tr>
    <?php
        $flag = false;  $total = 0;

        while ( list($arr, $value) = each($_COOKIE) ) {
  
            if ( isset($_COOKIE[$arr]) && 
                   is_array($_COOKIE[$arr]) ) {
            if ($flag) {   
                $flag = false;
                $color="#F75000";
            } else {
                $flag = true;
                $color="#FFF4C1";
            }
        echo "<tr bgcolor='".$color."'><td>";
        echo "<a href='delete.php?Id=".$arr."'>";
        echo "刪除</a></td>";
        $price = 0;
        $quantity = 0; 
        while ( list($name, $value)=each($_COOKIE[$arr])) {
        
            echo "<td>" . $value . "</td>";
            if ($name == "Price")  $price = $value;
            if ($name == "Quantity") $quantity = $value;
        }
        $total += $price * $quantity;  
        echo "</tr>";
        }
        }
        if ($total != 0) {  
            echo "<tr bgcolor=aqua><td colspan=5 align=right>";
            echo "總金額 = ".$total."元</td></tr>";
        }
    ?>
        </table>
        <hr/> | <a href="catalog.php">目錄</a>
|       <a href="shoppingcart.php">購物車</a> |
        </body>
    </html>