<link rel=stylesheet type="text/css" href="style.css">
<?php

setcookie("s".$_GET["id"], "", time()-3600);
header("location:shoppingcart.php");
?>