<?php
$number = $_GET["number"];  // 取得URL參數
if (isset($_COOKIE[$number])) { // 檢查Cookie是否存在
    foreach($_COOKIE[$number] as $name => $value)
      setcookie($number."[".$name."]", "", time()-3600); 
}
header("Location: shoppingcart.php");

?>