<div style='text-align:center'><h2>~購物車~</h2></div>
<body style='background-color:rgba(63,191,63,0.4);'></body>

<?php

echo "<table border='1' style='width:75%'>";
echo "<tr>";
echo "<th>功能</th>";
echo "<th>編號</th>";
echo "<th>名稱</th>";
echo "<th>價格</th>";
echo "<th>數量</th>";
echo "</tr>";
$total = 0;

$_COOKIE = array();

foreach($_COOKIE as $arr){
        echo "<tr>";
        echo "<td><a href='delete.php?number=".$arr."'>刪除</a></td>";
        $price = 0;
        $quantity = 0;
    
       foreach($_COOKIE[$arr] as $name => $value){
            echo "<td>".$value."</td>";
            if($name == "price") 
                $price = $value;
            if($name == "quantity") 
                $quantity = $value;
        }
    
        $total += $price * $quantity;
        echo "</tr>";
}

if($total != 0){
    echo "<tr><td>";
    echo "Total = $".$tatol."元</td></tr>";
}

?>
<a href="catalog.php">商品目錄</a>