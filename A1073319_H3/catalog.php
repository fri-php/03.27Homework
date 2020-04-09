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
         $_SESSION["Name"] = "金箔衛生紙";
         $_SESSION["Price"] = 8900;
         break;
      case "S002":
         $_SESSION["Name"] = "100吋電視";
         $_SESSION["Price"] = 25000;
         break;
      case "S003":
         $_SESSION["Name"] = "Ninja400";
         $_SESSION["Price"] = 290000;
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
  <option value="S001">金箔衛生紙 ---- $8900</option>
  <option value="S002">100吋電視 ---- $25000</option>
  <option value="S003">Ninja400 ---- $29000</option> 
</select>
<input type="text" size="5" name="Quantity" value="1"/>
<input type="submit" value="訂購"/>
</form>
<hr/>| <a href="catalog.php">商品目錄</a>
| <a href="shoppingcart.php">檢視購物車</a> |
</body>
</html>