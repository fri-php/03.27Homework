<!DOCTYPE html>
<head>
	<title>Catalog</title>
</head>

<body style="background-color:blue;">

<?php
session_start();

if(isset($_SESSION["login"])){
	echo "Login Success!<br/><br/>";
	$date = strtotime("+7 days",time());
	$uName=$_SESSION["ID"];
	setcookie("ID",$uName,$date);

}else{
	echo "Unable to login<br/>";
	echo "<a href='login.php'>Back to login page</a>";
}


if(isset($_POST["Product"])){
	$_SESSION["Qty"] = $_POST["Qty"];
    $id = $_POST["Product"];
	$_SESSION["ID"] = $id;
	
	switch (strtoupper($id)) {
			case "1":
				$_SESSION["name"]="Pork Belly";
				$_SESSION["price"]="200";
				break;
			case "2":
				$_SESSION["Name"]="Spaghetti";
				$_SESSION["Price"]="80";
				break;
			case "3":
				$_SESSION["Name"]="Milk 1L";
				$_SESSION["Price"]="120";
				break;
			case "4":
				$_SESSION["Name"]="Fried Rice";
				$_SESSION["Price"]="60";
				break;
		}
		header("Location:savecart.php");
	}
?>

<h2>Product List~</h2>

<form action="catalog.php" method="POST">
Please Choose： <select name="Product">
			    	<option value="1">Pork Belly $200</option>
			 		<option value="2">Spaghetti $80</option>
			 		<option value="3">Milk-1L $120</option>
			 		<option value="4">Fried Rice $60</option>
		        </select> 

<input type="number" name="Qty"><br/><br/>
<input type="submit" value="Order">
</form><br/>

<a href="shoppingcart.php">Shopping Cart</a>
<a href='login.php'>Back to login page</a>
</body>
</html>