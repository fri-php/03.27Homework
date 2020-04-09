<html>
<head>
<meta charset="utf-8" />
<title>catalog.php</title>
<?php
session_start();  

if ( isset($_POST["Item"]) ) {
   
   $_SESSION["Quantity"] = $_POST["Quantity"];
   $id = $_POST["Item"];  
   $_SESSION["ID"] = $id; 
   switch (strtoupper($id)) {
      case "1":
         $_SESSION["Name"] = "芝麻醬刀削拌麵(單包)";
         $_SESSION["Price"] = 49;
         break;
      case "2":
         $_SESSION["Name"] = "芝麻醬刀削拌麵(4包)";
         $_SESSION["Price"] = 169;
         break;
      case "3":
         $_SESSION["Name"] = "鮮潤滋味嫩芽海菜";
         $_SESSION["Price"] = 199;
         break;   
      case "4":
         $_SESSION["Name"] = "新鮮蔬果果味泡菜";
         $_SESSION["Price"] = 199;
         break; 
      case "5":
         $_SESSION["Name"] = "清爽好味鳳梨黃金泡菜";
         $_SESSION["Price"] = 199;
         break; 
      case "6":
         $_SESSION["Name"] = "原味小鐵蛋(8入)";
         $_SESSION["Price"] = 59;
         break; 
   }  
   header("Location: savecart.php");  
}
?>
</head>
<body>
<form action="catalog.php" method="POST">
選擇商品: 
<select name="Item">
  <option value="1">芝麻醬刀削拌麵(單包) - $49</option>
  <option value="2">芝麻醬刀削拌麵(4包) - $169</option>
  <option value="3">鮮潤滋味嫩芽海菜 - $199</option> 
  <option value="4">新鮮蔬果果味泡菜 - $199</option> 
  <option value="5">清爽好味鳳梨黃金泡菜 - $199</option>
  <option value="5">原味小鐵蛋(8入) - $59</option>
</select>
<input type="text" size="5" name="Quantity" value="1"/>
<input type="submit" value="訂購"/>
</form>
<hr/>| <a href="catalog.php">目錄</a>
| <a href="shoppingcart.php">購物車</a> |
</body>
</html>