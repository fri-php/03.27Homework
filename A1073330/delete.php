<?php
 if($_POST["d"]=="NYKD-54"){
    setcookie("NYKD","", time()-3600);
    setcookie("NYKDn","", time()-3600);
    setcookie("NYKDP","", time()-3600);
 }
 if($_POST["d"]=="SSNI-864"){
    setcookie("SSNI","", time()-3600);
    setcookie("SSNIn","", time()-3600);
    setcookie("SSNIP","", time()-3600);
 }
 if($_POST["d"]=="SQTE-483"){
    setcookie("SQTE","", time()-3600);
    setcookie("SQTEn","", time()-3600);
    setcookie("SQTEP","", time()-3600);
 }
 header('Location:cart.php');
?>