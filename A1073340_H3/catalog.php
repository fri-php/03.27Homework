<html>
<h2>訂購商品頁面</h2>
	<form action="catalog.php" method="POST">
	選擇商品：
	<select name="Item">
			<option value="S001">NIKE react element 55</option>
		 	<option value="S002">converse 1970</option>
		 	<option value="S003">Adidas ultra boost 4.0</option>
	</select> 
	數量:<input type="text"  name="Quantity">
	<input type="submit" value="提交商品">
	</form>
	<a href="catalog.php">商品目錄</a></br>
	<a href="shoppingcart.php">檢視購物車</a>
<?php
session_start();

if(isset($_POST["Item"]))
{
	$_SESSION["Quantity"] = $_POST["Quantity"];
	$id = $_POST["Item"]; 
	$_SESSION["ID"] = $id;
	switch(strtoupper($id)){
		case "S001":
			$_SESSION["Name"] = "NIKE react element 55";
			$_SESSION["Price"] = 3100;
			break;
		case "S002":
			$_SESSION["Name"] = "converse 1970";
			$_SESSION["Price"] = 1970;
			break;
		case "S003":
			$_SESSION["Name"] = "Adidas ultra boost 4.0";
			$_SESSION["Price"] = 5200;
			break;	
	} 
	header("Location:savecart.php");

}
?>
</html>