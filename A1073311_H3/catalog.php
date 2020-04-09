<html>
<head>
<style>
        input {padding:5px 15px; background:#ccc; border:0 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px; }
        textarea {padding:10px 15px; background:#ccc; border:0 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px; }
        select {padding:5px 15px; background:#ccc; border:0 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px; }
    .form-group input:after {
	content: ' *';
	color: #999;
	font-size: 150%;
}
    </style>
<meta charset="utf-8" />
<title>catalog.php</title>
<?php
session_start();  

if ( isset($_POST["Item"]) ) {
   
   $_SESSION["Quantity"] = $_POST["Quantity"];
   $id = $_POST["Item"];  
   $_SESSION["ID"] = $id; 
   switch (strtoupper($id)) {
      case "S001":
         $_SESSION["Name"] = "可樂";
         $_SESSION["Price"] = 30;
         break;
      case "S002":
         $_SESSION["Name"] = "牛排";
         $_SESSION["Price"] = 230;
         break;
      case "S003":
         $_SESSION["Name"] = "電腦";
         $_SESSION["Price"] = 30000;
         break;   
   }  
   header("Location: savecart.php");  
}
?>
</head>
<body><center><form action="catalog.php" method="POST">
     <form action="/example/html5/demo_form.asp" method="get">
     <h1>歡迎選購</h1>
    
     商品:<select name="Item" required="true" >
            <option value="" disabled selected hidden>請選擇</option>
            <option value="S001">可樂 $30</option>
            <option value="S002">牛排 $230</option>
            <option value="S003">電腦 $30000</option>
            </select>
     <input type="text" name="Quantity" placeholder="輸入數量" required="required" value="1"/></p>
     <input type="submit" value="加入購物車">
     <input type="reset" value="全部重填" /><br />
     <a href="shoppingcart.php">購物車</a>
        </form></center></body>
</html>