<?php
include_once "lib/php/functions.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Drunken Dudes</title>

	<meta name="viewport" content="width=device-width">

	<link rel="stylesheet" href="lib/css/styleguide.css">
	<link rel="stylesheet" href="lib/css/gridsystem.css">
	<link rel="stylesheet" href="css/storetheme.css">
	
</head>
<body>
	<header class="navbar">
		<div class="container display-flex">
			<div class="flex-none">
				<h1>Drunken Dudes</h1>
			</div>
			<div class="flex-stretch"></div>
			<nav class="flex-none nav">
				<ul class="container display-flex">
					<li class="active"><a href="index.php">Home</a></li>
					<li><a href="product_list.php">Liquors</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="product_cart.php">Cart</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<div class="container">
		<h2>Beautiful Pink Vodka</h2>
	</div>
	<div class="view-window" style="background-image:url('img/main1.png')">
	</div>

	<div class="container">
		<br>
		<h3>
		Dudes' pick
		</h3>
		<div class="grid gap">
			<div class="col-xs-12 col-md-4">
				<figure class="figure product">
					<img src="img/3.png" alt="">
					<figcaption>
						<div>Johnnie Walker - Blue Label</div>
						<div>$3.99</div>
					</figcaption>
				</figure>
			</div>
		
			<div class="col-xs-12 col-md-4">
				<figure class="figure product">
					<img src="img/4.png" alt="">
					<figcaption>
						<div>Bacadi - Gold</div>
						<div>$3.99</div>
					</figcaption>
				</figure>
			</div>
		
			<div class="col-xs-12 col-md-4">
				<figure class="figure product">
					<img src="img/5.png" alt="">
					<figcaption>
						<div>Tequila</div>
						<div>$3.99</div>
					</figcaption>
				</figure>
			</div>
		</div>
		<br><br>
		
	</div>

	<footer>
		Copyright © 2022 Academy of Art University Jinyeong Kim
	</footer>
</body>
</html>