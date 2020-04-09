<?php
session_start();
if(isset($_SESSION["login"])){   //檢查參數的Session變數(登入)是否存在
    if(isset($_POST["book"])){
        $_SESSION["quantity"] = $_POST["quantity"];
        $number = $_POST["book"];
        $_SESSION["number"] = $number;
        switch($number){
            case "b1";
                $_SESSION["name"] = "星空下的等待";
                $_SESSION["price"] = "320";
                break;
            case "b2";
                $_SESSION["name"] = "這世界很煩，但你要很可愛";
                $_SESSION["price"] = "330";
                break;
            case "b3";
                $_SESSION["name"] = "你不是失敗，你是值得更好的";
                $_SESSION["price"] = "350";
                break;
            case "b4";
                $_SESSION["name"] = "帶自己，去更好的地方";
                $_SESSION["price"] = "280";
                break;
            case "b5";
                $_SESSION["name"] = "不只相愛，也要努力走到幸福";
                $_SESSION["price"] = "280";
                break;
            case "b6";
               $_SESSION["name"] = "ROLAND　我，和我以外的。";
                $_SESSION["price"] = "350";
                break;
        }
        header("Location: savecart.php");
        
    }
    
  }else{
      echo "非法進入<br/>";
      echo "<a href='login.php'>回首頁</a>"; 
  }



?>
<div style="text-align:center"><h2>歡迎來到阿柴網路書城</h2></div>
<body style="background-color:rgba(218,173,239,0.9);"></body>
<form action="shoppingcart.php" method="POST">
    <b>選擇商品:</b><select name="book">
                <option value="choose">--請選擇--</option>
                <option value="b1">星空下的等待 - $320</option>
                <option value="b2">這世界很煩，但你要很可愛 - $330</option>
                <option value="b3">你不是失敗，你是值得更好的 - $350</option>
                <option value="b4">帶自己，去更好的地方 - $280</option>
                <option value="b5">不只相愛，也要努力走到幸福 - $280</option>
                <option value="b6">ROLAND　我，和我以外的。 - $350</option>
            </select> &emsp;
    <b>數量:</b><input type="number" name="quantity" min="0">本 &emsp;
    <input type="submit" value="訂購"><br><br><br>
    
    <a href="savecart.php">商品目錄</a>&emsp;<a href="shoppingcart.php">檢視購物車</a>
    <br/> 
    
</form> 