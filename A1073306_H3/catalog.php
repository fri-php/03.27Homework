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
      case "S001":
         $_SESSION["Name"] = "iphone12";
         $_SESSION["Price"] = 30000;
         break;
      case "S002":
         $_SESSION["Name"] = "iphone9";
         $_SESSION["Price"] = 15000;
         break;
      case "S003":
         $_SESSION["Name"] = "airpods2";
         $_SESSION["Price"] = 4500;
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
  <option value="S001">iphone12 - $30000</option>
  <option value="S002">iphone9 - $15000</option>
  <option value="S003">airpods2 - $4500</option> 
</select>
<input type="text" size="5" name="Quantity" value="1"/>
<input type="submit" value="訂購"/>
</form>
<hr/>| <a href="catalog.php">商品目錄</a>
| <a href="shoppingcart.php">檢視購物車</a> |
</body>
</html>