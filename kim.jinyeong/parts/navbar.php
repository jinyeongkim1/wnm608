<?php

include_once "lib/php/functions.php";

?>

<header class="navbar">
		<div class="container display-flex">
			<div class="flex-none">
				<h1>Drunken Dudes</h1>
			</div>
			<div class="flex-stretch"></div>
			<nav class="flex-none nav">
				<ul class="container display-flex">
					<!-- li*3>a[href=#]>{Link $} -->
					<li><a href="index.php">Home</a></li>
					<li><a href="product_list.php">Liquors</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="product_cart.php">
						<span>Cart</span>
						<span class="badge"><?= makeCartBadge(); ?></span>
					</a></li>
				</ul>
			</nav>
		</div>
	</header>