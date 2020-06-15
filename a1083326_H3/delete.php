<?php 
session_start;
$ids = $_GET["ids"]; 
$arr = $_SESSION["gwc"]; 
foreach ($arr as $key=>$v)
{
    if($v[0]==$ids)
    {
        if($v[1]>1){
 $arr[$key][1]-=1;
        }
        else{
 unset($arr[$key]);
        }
    }

}
$_SESSION["gwc"] = $arr;

header("location:ckgwc.php");
?>
