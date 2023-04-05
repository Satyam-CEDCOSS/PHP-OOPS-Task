<!DOCTYPE html>
<html>
<head>
	<title>
		Products
	</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
	<link href="./CSS/stylish.css" type="text/css" rel="stylesheet">
</head>
<!-- Main Product Class  -->
<body>
	<?php
	include_once "header.php"
	?>
	<div id="main">
		<div id="products">
			<?php
			include_once 'config.php';
			$str = "";
			foreach ($_SESSION['sports'] as $key => $value) {
				$str .= "<div id='product-".$value->getId()."'class='product'>
					<img src= '".$value->getImg()."'>
					<h3 class='title'><a href='#'>".$value->getName()."</a></h3>
					<span>Price: $".$value->getPrice()."</span>
					<a class='add-to-cart' onclick=add_product($key)>Add To Cart</a></div>";
			}
			echo $str;
			?>
		</div>
	</div>
	<div class="section__box">
		<h1>Product Table</h1>
		<!-- main table  -->
		<div class="section__table">
			<table>
				<thead>
					<tr>
						<th>Product Image</th>
						<th>Product Name</th>
						<th>Quantity</th>
						<th>Total Price</th>
						<th>Buttons</th>
					</tr>
				</thead>
				<!-- table body  -->
				<tbody id="table_body"></tbody>
				<!-- table foot  -->
				<tfoot id="table_foot"></tfoot>
			</table>
		</div>
	</div>
	<?php
	include_once "footer.php"
	?>
</body>
<script src="./JS/script.js"></script>

</html>