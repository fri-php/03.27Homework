<head>
    <title>訂購表</title>
</head>

<body bgcolor="#cccccc">
    <font face="標楷體">
    <center>
        <h2>訂購表</h2>
<?php
    echo "<table border='2'>".
         "<tr> 
            <td align='center' valign='middle'>功能</td> 
            <td align='center' valign='middle'>名稱</td>
            <td align='center' valign='middle'>價錢</td> 
            <td align='center' valign='middle'>數量</td>
         </tr>";
          
if(isset($_COOKIE["Itemchi"]))
    {

    echo "<tr>". 
              "<td align='center' valign='middle'>"."<form action='delete.php' method='POST'>"."<input type='submit' name='chi' value='delete'>"."</form>"."</td>".
              "<td align='center' valign='middle'>".雞."</td>".
              "<td align='center' valign='middle'>3000</td>".
              "<td align='center' valign='middle'>".$_COOKIE["numberchi"]."</td>".          
         "</tr>";
         
    }
    
if(isset($_COOKIE["Itemduk"]))
    {

    echo "<tr>". 
              "<td align='center' valign='middle'>"."<form action='delete.php' method='POST'>"."<input type='submit' name='duk' value='delete'>"."</form>"."</td>".
              "<td align='center' valign='middle'>".鴨."</td>".
              "<td align='center' valign='middle'>1500</td>".
              "<td align='center' valign='middle'>".$_COOKIE["numberduk"]."</td>".          
         "</tr>";
    }
    
if(isset($_COOKIE["Itemcurry"]))
    {
    
    echo "<tr>".
              "<td align='center' valign='middle'>"."<form action='delete.php' method='POST'>"."<input type='submit' name='cur' value='delete'>"."</form>"."</td>".
              "<td align='center' valign='middle'>".咖哩."</td>".
              "<td align='center' valign='middle'>27000</td>".
              "<td align='center' valign='middle'>".$_COOKIE["numbercur"]."</td>".          
         "</tr>";
    }
    $price1=3000*$_COOKIE["numberchi"];
    $price2=1500*$_COOKIE["numberduk"];
    $price3=21000*$_COOKIE["numbercur"];

$total=$price1+$price2+$price3;
echo "<tr>".
     "<td align='center' valign='middle'>總金額:".$total."</td>".
     "</tr>";       
echo "</table>";

echo "<a href='catalog.php'>繼續購買</a>";

?>
</font>
</center>
</body>
</html>
