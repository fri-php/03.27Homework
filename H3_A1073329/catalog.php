<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>catalog.php</title>
<?php
session_start();  // 啟用交談期
// 檢查是否是表單送回
if ( isset($_POST["Item"]) ) {
   // 取得購買的數量
   $_SESSION["Quantity"] = $_POST["Quantity"];
   $id = $_POST["Item"];  // 取得選擇商品
   $_SESSION["ID"] = $id; // 建立Session變數
   switch (strtoupper($id)) {
      case "S001":
         $_SESSION["Name"] = "airpod 1";
         $_SESSION["Price"] = 12000;
         break;
      case "S002":
         $_SESSION["Name"] = "airpod 2";
         $_SESSION["Price"] = 27000;
         break;
      case "S003":
         $_SESSION["Name"] = "pornpod";
         $_SESSION["Price"] = 69000;
         break;   
   }  
   header("Location: savecart.php");  // 轉址
}
?>
</head>
<body bgcolor="#FFCC77" text="blue">
<form action="catalog.php" method="post">
選擇商品: 
<select name="Item">
  <option value="S001">airpod 1 - $12000</option>
  <option value="S002">airpod 2 - $27000</option>
  <option value="S003">pornpod - $69000</option> 
</select>
<input type="text" size="5" name="Quantity" value="1"/>
<input type="submit" value="訂購"/>
</form>
<hr/>| <a href="catalog.php">商品目錄</a>
| <a href="shoppingcart.php">檢視購物車</a> |
</body>
</html>