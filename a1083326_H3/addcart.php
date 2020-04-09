 <?php
 $item=$_POST[item];
 for($i=0;$i<count($arr);$i++)
 {
  if($arr[$i][0]==$ids)
  {
  $arr[$i][1]+=1;
  }
 }
 $_SESSION["gwc"] = $arr;
 }
 else
 {
 $asg = array($ids,1);
 $arr[] = $asg;
 $_SESSION["gwc"] = $arr;
 }
}
header("location:cart.php");
?>