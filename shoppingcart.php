<?php
session_start();
?>
<?php if (isset($_COOKIE["ID"])): ?>
	<table>
	<tr>
		<th>功能</th>
		<th>編號</th>
		<th>產品名稱</th>
		<th>價格</th>
		<th>數量</th>
	</tr>
	<tr>
		<th>
			<form action='delete.php' method='POST'>
				<?php 
					if($_SESSION["number1"]>0)
					{
						echo "<input type='submit' name='1' value='刪除''>";
					}
				?>
			</form>
		</th>
		<th><?php
			if($_SESSION["number1"]>0)
			{
				echo "S001";
			}?>
		</th>
		<th><?php
			if($_SESSION["number1"]>0)
			{
				echo $_SESSION["item1"];
			}?>
		</th>
		<th><?php
			if($_SESSION["number1"]>0)
			{
				echo $_SESSION["price1"];
			}?>
		</th>
		<th><?php
			if($_SESSION["number1"]>0)
			{
				echo $_SESSION["number1"]."台"."<br/>";
			}?>
		</th>
	</tr>
	<tr>
		<th>
			<form action='delete.php' method='POST'>
				<?php 
					if($_SESSION["number2"]>0)
					{
						echo "<input type='submit' name='2' value='刪除''>";
					}
				?>
			</form>
		</th>
		<th><?php
			if($_SESSION["number2"]>0)
			{
				echo "S002";
			}?>
		</th>
		<th><?php
			if($_SESSION["number2"]>0)
			{
				echo $_SESSION["item2"];
			}?>
		</th>
		<th><?php
			if($_SESSION["number2"]>0)
			{
				echo $_SESSION["price2"];
			}?>
		</th>
		<th><?php
			if($_SESSION["number2"]>0)
			{
				echo $_SESSION["number2"]."台"."<br/>";
			}?>
		</th>
	</tr>

	<tr>
		<th>
			<form action='delete.php' method='POST'>
				<?php 
					if($_SESSION["number3"]>0)
					{
						echo "<input type='submit' name='3' value='刪除''>";
					}
				?>
			</form>
		</th>
		<th><?php
			if($_SESSION["number3"]>0)
			{
				echo "S003";
			}?>
		</th>
		<th><?php
			if($_SESSION["number3"]>0)
			{
				echo $_SESSION["item3"];
			}?>
		</th>
		<th><?php
			if($_SESSION["number3"]>0)
			{
				echo $_SESSION["price3"];
			}?>
		</th>
		<th><?php
			if($_SESSION["number3"]>0)
			{
				echo $_SESSION["number3"]."台"."<br/>";
			}?>
		</th>
	</tr>
</table>
<a href="catalog.php">返回目錄</a><br>
<a href="logout.php">登出</a>

<?php else: ?>
	<p>非法進入</p>
	<a href='login.php'>回登入畫面</a>
<?php endif ?>
	
