<?php
if (isset($_POST["a"])) 
{
 setcookie("阿呆的奶茶", "", time()-3600*12);
}
if (isset($_POST["b"])) 
{
 setcookie("阿呆的薯條", "", time()-3600*12);
}
if (isset($_POST["c"])) 
{
 setcookie("阿瓜的小孩頭", "", time()-3600*12);
}
if (isset($_POST["d"])) 
{
 setcookie("阿傻的微積分作業", "", time()-3600*12);
}
if (isset($_POST["e"])) 
{
 setcookie("阿笨的錢包", "", time()-3600*12);
}
if (isset($_POST["f"])) 
{
 setcookie("阿笨的酒精", "", time()-3600*12);
}
header("location:shoppingcart.php");

?>