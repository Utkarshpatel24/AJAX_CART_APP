<?php
session_start();
// $id=$_POST['carrt_button'];
// echo $id;
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Products
	</title>
	<link href="style.css" type="text/css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="cart.js"></script>
</head>
<body>
	<div id="header">
		<!-- <h1 id="logo">Logo</h1>
		<nav>
			<ul id="menu">
				<li><a href="index.php">Home</a></li>
				<li><a href="products.php">Products</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</nav> -->
		<?php include "header.php" ?>
	</div>
	
	<div id="main">
		<div id="products">
			<!-- <div id="product-101" class="product">
				<img src="images/football.png">
				<h3 class="title"><a href="#">Product 101</a></h3>
				<span>Price: $150.00</span>
				<a class="add-to-cart" href="#">Add To Cart</a>
			</div>
			<div id="product-101" class="product">
				<img src="images/tennis.png">
				<h3 class="title"><a href="#">Product 102</a></h3>
				<span>Price: $120.00</span>
				<a class="add-to-cart" href="#">Add To Cart</a>
			</div>
			<div id="product-101" class="product">
				<img src="images/basketball.png">
				<h3 class="title"><a href="#">Product 103</a></h3>
				<span>Price: $90.00</span>
				<a class="add-to-cart" href="#">Add To Cart</a>
			</div>
			<div id="product-101" class="product">
				<img src="images/table-tennis.png">
				<h3 class="title"><a href="#">Product 104</a></h3>
				<span>Price: $110.00</span>
				<a class="add-to-cart" href="#">Add To Cart</a>
			</div>
			<div id="product-101" class="product">
				<img src="images/soccer.png">
				<h3 class="title"><a href="#">Product 105</a></h3>
				<span>Price: $80.00</span>
				<a class="add-to-cart" href="#">Add To Cart</a>
			</div> -->
			<!-- <form action="" method="post"> -->
			<?php
			     include "config.php";
			    foreach($products as $product)
				{
					//foreach($product as $value)
					//{
						echo "<div id='product-".$product['id']." ' class='product'>
						<img src='images/'".$product['image'].">
						<h3 class='title'><a href='#'>Product ".$product['id']."</a></h3>
						<span>Price:".$product['price']."</span>
						<a id='add_to_cart_button' data-id='".$product['id']."'class='add-to-cart' href='addToCart.php?id=".$product['id']."'>Add To Cart</a>
					    </div>";
						//echo $value;
					//}
				}
			?>
			<!-- </form> -->
		</div>

	</div>
	<div id="table">
		<?php echo $_SESSION['display'] ?>
	</div>
	<!-- <div id="footer">
		<nav>
			<ul id="footer-links">
				<li><a href="#">Privacy</a></li>
				<li><a href="#">Declaimers</a></li>
			</ul>
		</nav>
	</div> -->
	<?php include "footer.php" ?>
</body>
</html>