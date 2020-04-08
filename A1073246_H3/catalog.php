<html>
<?php
session_start();
if(isset($_POST["Item"])){
    $_SESSION["Quantity"] = $_POST["Quantity"];
    $id = $_POST["Item"];
    $_SESSION["ID"] = $id;
    switch (strtoupper($id)){
        case "S001":
            $_SESSION["Name"]="10吋變形平板";
            $_SESSION["Price"]=12000;
            break;
        case "S002":
            $_SESSION["Name"]="15.6吋變形平板";
            $_SESSION["Price"]=27000;
            break;
        case "S003":
            $_SESSION["Name"]="iphone手機";
            $_SESSION["Price"]=21000;
            break;
    }
    header("location: addcart.php");

}
?>

<h2>請選擇您的商品</h2></br>
<form action ="catalog.php" method="POST">
選擇商品:
<select name="Item">
    <option value="S001">10吋變形平板-$12000</option>
    <option value="S002">15.6吋筆記型電腦-$27000</option>
    <option value="S003">iphone手機-$21000</option>
</select>
<input type="text" name="Quantity" value="1">
<input type="submit" name="" value="訂購">
</form>
</html>





