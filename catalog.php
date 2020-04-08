<!DOCTYPE html>
<html>
<head>
<?php  
session_start();

if(isset($_POST["goods"]))
{$_SESSION["num"]=$_POST["num"];
 $_id=$_POST["goods"];
 $_SESSION["id"]=$id;
 switch (strtoupper($nam)) {
 	case 'bag':
 		$_SESSION["nam"]="背包";
 		$_SESSION["pri"]=1500;
 		break;
 	case 'hat':
 		$_SESSION["nam"]="帽子";
 		$_SESSION["pri"]=1000;
 		break;
 	case 'ts':
 		$_SESSION["nam"]="衣服";
 		$_SESSION["pri"]=1000;
 		break;
 	case 'short':
 		$_SESSION["nam"]="褲子";
 		$_SESSION["pri"]=1000;
 		break;
 }
 header("Location:savecart.php");
}

?>
</head>
<body bgcolor="#FBEEE6" >


/l
<h1>歡迎光臨購物網站</h1>
<form action="savecart.php" method="post">
<select name="goods">
　<option name="1">背包 $1500</option>
　<option name="2">帽子 $1000</option>
　<option name="3">衣服 $1000</option>
　<option name="4">褲子 $1000</option>
<input type="number" name="num" value="1">
<input type="submit" value="訂購">
</select>
</form>
<?php echo "<a href='shoppingcart.php'>檢視購物車<br/></a>";?></span></body>
</html>
