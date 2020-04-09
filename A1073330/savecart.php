<?php
 if($_POST["merch"]=="NYKD-54"){
    session_start();
    $NYKD=$_POST["merch"];
    $number=$_POST["count"];
    $NYKDP=100000*(int)$number;
    $date = strtotime("+10 days",time());
    setcookie("NYKD",$NYKD,$date);
    setcookie("NYKDn",$number,$date);
    setcookie("NYKDP",$NYKDP,$date);
    echo $NYKD.$number;
 }
 if($_POST["merch"]=="SSNI-864"){
    session_start();
    $SSNI=$_POST["merch"];
    $number=$_POST["count"];
    $SSNIP=800*(int)$number;
    $date = strtotime("+10 days",time());
    setcookie("SSNI",$SSNI,$date);
    setcookie("SSNIn",$number,$date);
    setcookie("SSNIP",$SSNIP,$date);
    echo $SSNI.$number;
 }
 if($_POST["merch"]=="SQTE-483"){
    session_start();
    $SQTE=$_POST["merch"];
    $number=$_POST["count"];
    $SQTEP=3000*(int)$number;
    $date = strtotime("+10 days",time());
    setcookie("SQTE",$SQTE,$date);
    setcookie("SQTEn",$number,$date);
    setcookie("SQTEP",$SQTEP,$date);
    echo $SQTE.$number;
 }
 
 
 header('Location:catalog.php');
?>