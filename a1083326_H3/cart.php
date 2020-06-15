<body> <h1>查看購物車</h1> <table width="100%" border="1"cellspacing="0" cellpadding="0"> <tr> <td>商品名稱</td> <td>商品單價</td> <td>商品數量</td> <td>操作</td> </tr>
<?php
    session_start;
    if(!empty($_SESSION["gwc"]))
    {
        $arr = array;
        $arr = $_SESSION["gwc"];
    }
    include ('db.class.php');
    $db = new db;
    foreach ($arr as $v)
    {
        global $db;
        $sql = "select * from sgbiao WHERE ids = '{$v[0]}'";
        $att = $db->query($sql);
        foreach ($att as $a)
        {
 echo "<tr>
        <td>{$a[1]}</td>
        <td>{$a[2]}</td>
        <td>{$v[1]}</td>
        <td><a href='delete.php'>刪除</a> </td>
    </tr> ";
        }
    }
    ?>
