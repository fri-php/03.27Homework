<html>
<head>
	<title>購物車內容</title>
</head>
<form action="delete.php" method="POST">
<body bgcolor="#F4CA24">




    <table border='1'>
     <tr><th>產品</th><th>數量</th><th>金額</th><th>刪除</th><tr>
     <tr><th>電腦</th><td><?php  echo $_COOKIE["goods1"];?></td><td><?php  echo $_COOKIE["goods1"]*14999;?></td><td><input type="submit" name="delete1" value="刪除" ></td><tr>
     <tr><th>電視</th><td><?php  echo $_COOKIE["goods2"];?></td><td><?php  echo $_COOKIE["goods2"]*9999;?></td><td><input type="submit" name="delete2" value="刪除" ></td><tr>
     <tr><th>冰箱</th><td><?php  echo $_COOKIE["goods3"];?></td><td><?php  echo $_COOKIE["goods3"]*39999;?></td><td><input type="submit" name="delete3" value="刪除" ></td><tr>

</form>
<a href="catalog.php"> 回商品目錄 </a><br/>
</body>
</html>
      
     

    
