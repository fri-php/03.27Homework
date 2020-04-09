<html>
<head>
<meta charset="utf-8" />
<title>蛋麵～豆薯！</title>
<?php
session_start();  

if ( isset($_POST["Item"]) ) {
   
   $_SESSION["Quantity"] = $_POST["Quantity"];
   $id = $_POST["Item"];  
   $_SESSION["ID"] = $id; 
   switch (strtoupper($id)) {
      case "S001":
         $_SESSION["Name"] = "【1 for one 挺好】 原味小鐵蛋 (8入/24顆/袋)";
         $_SESSION["Price"] = 150;
         break;
      case "S002":
         $_SESSION["Name"] = "【1 for one 挺好】 原味豆干 (8入/袋)";
         $_SESSION["Price"] = 150;
         break;
      case "S003":
         $_SESSION["Name"] = "【1 for one 挺好】 原味鐵蛋 (7入/袋)";
         $_SESSION["Price"] = 150;
         break;
      case "S004":
         $_SESSION["Name"] = "【1 for one 挺好】帥薯薯馬鈴薯條";
         $_SESSION["Price"] = 79;
         break;
      case "S005":
         $_SESSION["Name"] = "【1 for one 挺好】緩慢日曬。濃郁芝麻醬刀削小鐵蛋拌麵 (3入)";
         $_SESSION["Price"] = 165;
         break;
      case "S006":
         $_SESSION["Name"] = "【1 for one 挺好】緩慢日曬。濃郁芝麻醬刀削豆乾拌麵 (3入)";
         $_SESSION["Price"] = 165;
         break;
      case "S007":
         $_SESSION["Name"] = "【1 for one 挺好】濃郁芝麻醬刀削拌麵4入";
         $_SESSION["Price"] = 140;
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
  <option value="S001">【1 for one 挺好】 原味小鐵蛋 (8入/24顆/袋) - $150</option>
  <option value="S002">【1 for one 挺好】 原味豆干 (8入/袋) - $150</option>
  <option value="S003">【1 for one 挺好】 原味鐵蛋 (7入/袋) - $150</option>
  <option value="S004">【1 for one 挺好】帥薯薯馬鈴薯條 - $79</option>
  <option value="S005">【1 for one 挺好】緩慢日曬。濃郁芝麻醬刀削小鐵蛋拌麵 (3入) - $165</option>
  <option value="S006">【1 for one 挺好】緩慢日曬。濃郁芝麻醬刀削豆乾拌麵 (3入) - $165</option>
  <option value="S007">【1 for one 挺好】濃郁芝麻醬刀削拌麵4入 - $140</option>
</select>
<input type="text" size="5" name="Quantity" value="1"/>
<input type="submit" value="訂購"/>
</form>
<hr/>| <a href="catalog.php">商品目錄</a>
| <a href="shoppingcart.php">購物車</a> |
</body>
</html>