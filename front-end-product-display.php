<html>
	<head>
	</head>
	


<body>	
	<?php include ("db_connection.php"); ?>
	<link rel="stylesheet" href="css/mystyles.css" />
	<script type="text/javascript" src="js/myjs.js"></script>
	
	<br><br><br>
	
	<h1 align="center"> JBU Online Store </h1>
	
	
	<ul>
		<li class="menu-item"><a href="#" class="drp">Books </a>
			<div class="menu-content">
				<a  href="add_book.php">Add Book</a><br>
				<a  href="remove_book.php">Remove Book</a><br>
				<a href="display_books.php">Display all Books</a><br>
			</div>
		
		</li>
		
		<li class="menu-item"><a href="#" class="drp">Books </a>
		<div class="menu-content">
			<a  href="add_book.php">Add Book</a><br>
			<a  href="remove_book.php">Remove Book</a><br>
			<a href="display_books.php">Display all Books</a><br>
		</div>
		
		</li>
		
		<li class="menu-item"><a href="#" class="drp">Users </a>	
		<div class="menu-content">
			<a href="add_user.php">Add User</a><br>
			<a href="remove_user.php">Remove User</a><br>
			<a href="display_users.php">Display all Users</a><br>
		</div>
		</li>
	</ul>
	<p align="center"> Welcome to JBU's Online store - open for faculty/staff and students!<p>

	

		<div class = "cartImg" id = "shopCart">
			<img src = "img\shoppingcart.png"" width = 40% onclick = "showMyCart()"  />
		
		</div>

		<div class = "myCart" id = "displayMyCart" style = "display:none;">
			<p>Cart</p>
		</div>
	

		</center>
	
		<table align="center">
				<tr>
	<?php 
		$count = 1;
		
		$sql_product = "SELECT * FROM product_tab";
		$result_product = $connect->query($sql_product);
		//echo "<img src = ".$row_product["product_image"]."/>";
			//echo $row_product["product_name"]."<br>";
			//echo $row_product["unit_price"]."<br>";
			//echo $result_product["description"]."<br>";
			//echo "<hr><br>";
		while($row_product = $result_product->fetch_assoc())
		{
		?>	
				<td>
				<?php  echo "<img src = '".$row_product["product_image"]."' /><br>"; ?>
				<?php	echo $row_product["product_name"]."<br>"; ?>
				<?php	echo $row_product["unit_price"]."<br>"; ?>
				<input type = button value="Add to Cart" onClick="javascript:addToCart('<?php	echo $row_product["product_name"]."<br>"; ?>')" />
				</td>
				
				
			
		<?php
		
		if ($count>=3)
		{ 
			echo "</tr><tr>";
			$count=1;
		}
		else
		{
			$count++;
		}
		}
	?>
			
			</table>
				
		
	
	
</body>
</html>