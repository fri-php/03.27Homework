<title>catalog</title>
<?PHP
session_start();

if($_SESSION["login"]==T)
{}
else
{
	header('Location:login.php');
}
?>
<form action="safecart.php" method="post">
	選擇商品:<select name="ID">
		<option value="S001">10吋變形平板-$12000</option>
		<option value="S002">15.6吋筆記型電腦-$27000</option>
		<option value="S003">iPhone手機-$21000</option>
	<input type="text" name="num" required>
	<input type="submit" value="訂購"><br/>
	<a href=shoppingcart.php>檢視購物車</a>
	<a href=logout.php>登出</a>
	
</form>

