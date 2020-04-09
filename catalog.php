<html>
<head>
<title>catalog.php</title>
<?php
session_start();  

if ( isset($_POST["Item"]) ) {
   
   $_SESSION["Quantity"] = $_POST["Quantity"];
   $id = $_POST["Item"];  
   $_SESSION["ID"] = $id; 
   switch (strtoupper($id)) {
      case "S1":
         $_SESSION["Name"] = "蔬菜脆片";
         $_SESSION["Price"] = 75;
         break;
      case "S2":
         $_SESSION["Name"] = "水果脆片";
         $_SESSION["Price"] = 75;
         break;
      case "S3":
         $_SESSION["Name"] = "燕麥可可BAR";
         $_SESSION["Price"] = 75;
         break;
      case "S4":
         $_SESSION["Name"] = "馬鈴薯脆片";
         $_SESSION["Price"] = 75;
         break;  
      case "S5":
         $_SESSION["Name"] = "大燕麥千層棒";
         $_SESSION["Price"] = 75;
         break;   
   }  
   header("Location: addcart.php");  
}
?>
<html>
	<title>訂購GOGOGO!</title>
<form action="catalog.php" method="post">
<h3>Welcome to crispy family 請選擇你要買ㄉ東C</h3>
<select name="Item">
    <option value="S1">蔬菜脆片-$75</option>
    <option value="S2">水果脆片-$75</option>
    <option value="S3">燕麥可可BAR-$75</option>
    <option value="S4">馬鈴薯脆片-$75</option>
    <option value="S5">大燕麥千層棒-$75</option>
</select>
<input type="text" name="Quantity" value="1">
<input type="submit" name="" value="訂購">
</form>
<a href="cart.php">看看購物車有啥(ゝ∀･)b</a> 
</html>


