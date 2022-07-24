<?php
include_once "lib/php/functions.php";

$product = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];

$images = explode(",", $product->images);

$image_elements = array_reduce($images,function($r,$o){
	return $r."<img src='img/$o'>";
});

// print_p($product);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Product Item</title>

	<?php include "parts/meta.php"; ?>

	<script src="js/product_thumbs.js"></script>
</head>
<body>
	<?php include "parts/navbar.php"; ?>

	<div class="container">
		<div class="grid gap">
			<div class="col-xs-12 col-md-7">
				<div class="card soft">
					<div class="images-main">
						<img src="img/<?= $product->thumbnail ?>" alt="">
					</div>
					<div class="images-thumbs">
						<?= $image_elements ?>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-5">
				<div class="card soft flat">
					<div class="card-section">
						<h2 class="product_title"><?= $product->title ?></h2>
						<div class="product_price">&dollar;<?= $product->price ?></div>
					</div>
					<div class="card-section">
		    	    	<label for="product-amount" class="form-label">Amount</label>
		    	    	<div class="form-select" id="product-amount">
		    	           <select>
		    	             <option>1</option>
		    	             <option>2</option>  
		    	             <option>3</option>  
		    	             <option>4</option>
		    	             <option>5</option>
		    	           </select>
		    	        </div>
		    	    </div>
		    	    <div class="card-section">
		    			<a href="product_added_to_cart.php?id=<?= $product->id ?>" class="form-button">Add To Cart</a>
		    		</div>
				</div>
			</div>
		</div>
		<div>
	    	<div class="card soft light">
	    		<p><?= $product->description ?></p>
	    	</div>
	    </div>
	</div>

	
	
</body>
</html>