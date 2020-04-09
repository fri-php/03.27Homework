<html>
<head>
<meta charset="utf-8">
</head>
<body>
	<form>
<select name="ID">
　<option value="NO.1">口罩</option>
　<option value="NO.2">酒精</option>
　<option value="NO.3">漂白水</option>
　<option value="NO.4">衛生紙</option>
　<input type="number" name="Quantity">
</select>
<input type="submit" value="送出">
</form>

</body>

<?php
SESSION_start();

if (isset($_POST["item"])){
	$_SESSION["Quantity"]=$_POST["Quantity"];
	$id = $_POST["item"];
	$_SESSION["ID"]=$id;
     switch (strtoupper($id)) {
                       	       
     case "NO.1":
        $_SESSION["name"]="口罩";
        $_SESSION["price"]= 500;     	
     	break;
     	
     case "NO.2":
     	$_SESSION["name"]="酒精";
        $_SESSION["price"]= 800;
     	break;
     case "NO.3":
        $_SESSION["name"]="漂白水";
        $_SESSION["price"]= 600;
        break;


     case "NO.4":
        $_SESSION["name"]="衛生紙";
        $_SESSION["price"]= 400;
        break;   


}

header('location:savecart.php');
}
?>





