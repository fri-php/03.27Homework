<html>
<head>
<meta charset="utf-8" />
<title>Crispy Family~♡˙︶˙♡</title>
<?php
session_start();  

if ( isset($_POST["Item"]) ) {
   
   $_SESSION["Quantity"] = $_POST["Quantity"];
   $id = $_POST["Item"];  
   $_SESSION["ID"] = $id; 
   switch (strtoupper($id)) {
      case "A01":
         $_SESSION["Name"] = "帥薯薯馬鈴薯條";
         $_SESSION["Price"] = 75;
         break;
      case "A02":
         $_SESSION["Name"] = "蔬菜脆片";
         $_SESSION["Price"] = 75;
         break;
      case "A03":
         $_SESSION["Name"] = "大燕麥千層棒";
         $_SESSION["Price"] = 75;
         break;
      case "A04":
         $_SESSION["Name"] = "燕麥可可Bar";
         $_SESSION["Price"] = 75;
         break;
      case "A05":
         $_SESSION["Name"] = "水果脆片";
         $_SESSION["Price"] = 75;
         break;  
   }  
   header("Location: addcart.php");  
}
?>
</head>
<body bgcolor="#EEB4B4">
<center><h2>Welcome to Crispy Family~♡˙︶˙♡</h2></center>
 <center form action="catalog.php" method="POST">
選擇商品: 
<select name="Item">
  <option value="A01">帥薯薯馬鈴薯條 - $75</option>
  <option value="A02">蔬菜脆片 - $75</option>
  <option value="A03">大燕麥千層棒 - $75</option>
  <option value="A04">燕麥可可Bar - $75</option>
  <option value="A05">水果脆片 - $75</option>
</select>
<input type="text" size="5" name="Quantity" value="1"/>
<input type="submit" value="訂下去(ゝ∀･)b"/>
</form>
<hr/>| <a href="cart.php">購物車</a> | 
</body>
</html>