
<html>
<table border="1">
　<tr>
　  <td>
        產品
    
    <td>
        數量
  
    </td>
    <td>
        價錢
      
    </td>
    
　  </tr>
    <tr>
        <td>
            <?php
            if(isset($_COOKIE["SQTE"])){
                echo $_COOKIE["SQTE"];
                $inUSername = $_COOKIE['Loginname'];
            }
            ?>
        </td>
        <td>
        <?php
            if(isset($_COOKIE["SQTE"])){
                echo $_COOKIE["SQTEn"];
                $inUSername = $_COOKIE['Loginname'];
            }
            ?>
        </td>
        <td>
        <?php
        if(isset($_COOKIE["SQTE"])){
            echo $_COOKIE["SQTEP"];
            $inUSername = $_COOKIE['Loginname'];
        }
        ?>
        </td>
    </tr>
    <tr><td>
        <?php
        if(isset($_COOKIE["NYKD"])){
            echo $_COOKIE["NYKD"];
            $inUSername = $_COOKIE['Loginname'];
        }

        ?>
        </td>
        <td>
        <?php
         if(isset($_COOKIE["NYKD"])){
            echo $_COOKIE["NYKDn"];
            $inUSername = $_COOKIE['Loginname'];
        }

        ?>
        </td>
        <td>
        <?php
        if(isset($_COOKIE["SSNI"])){
            echo $_COOKIE["NYKDP"];
            $inUSername = $_COOKIE['Loginname'];
        }
        ?>
        </td>
    </tr>
    <tr>
        <td>
        <?php
        if(isset($_COOKIE["SSNI"])){
            echo $_COOKIE["SSNI"];
            $inUSername = $_COOKIE['Loginname'];
        }
        ?> 
        </td>
        <td>
        <?php
        if(isset($_COOKIE["SSNI"])){
            echo $_COOKIE["SSNIn"];
            $inUSername = $_COOKIE['Loginname'];
        }
        ?>
        </td>
        <td>
        <?php
        if(isset($_COOKIE["SSNI"])){
            echo $_COOKIE["SSNIP"];
            $inUSername = $_COOKIE['Loginname'];
        }
        ?>
        </td>
    </tr>
移除商品:
    <form action="delete.php" method="POST">
        <select name="d" id="">
        <option  value="NYKD-54"><?php echo $_COOKIE["NYKD"] ?></option>
        <option  value="SSNI-864"><?php echo $_COOKIE["SSNI"] ?></option>
        <option  value="SQTE-483"><?php echo $_COOKIE["SQTE"] ?></option>
        </select>
        <input type="submit" value="刪除">
    </form>
<a href="catalog.php">返回選購頁面</a>
    
</table>
</html>