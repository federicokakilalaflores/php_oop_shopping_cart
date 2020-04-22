<div class="container mt-5">
	<h2 class="text-uppercase"><?php echo $page_title ?></h2> 

	<?php
		if( count($cartItemObj->readByUserId()) > 0 ) :

		foreach ($cartItemObj->readByUserId() as $cartItem):
			$product = $productObj->readById( $cartItem['product_id'] );
			$quantityInCart += $cartItem['quantity'];
			$totalPrice += ( $product['price'] * $cartItem['quantity']); 
	?>
		<hr>
			<div class="row">
				<div class="col-sm-8">
					<h6 class="text-uppercase prod-title"><?php echo $product['name']; ?></h6>
					<span class="text-muted">
						<?php echo $cartItem['quantity'] > 1 ? $cartItem['quantity'] . ' Items' : $cartItem['quantity'] . ' Item'  ?>
					</span>
				</div>
				<div class="col-sm-4 text-center">
					<div class="price text-center mt-1">
						<i class="fa fa-dollar-sign"></i> <?php echo $product['price']; ?>
					</div>
				</div>
			</div>

	<?php
		endforeach;
	?>
		<hr>
		<div class="row">
			<div class="col-sm-12 text-center">
				<p class="total-label text-muted m-0 mt-4">
					TOTAL (<?php echo $quantityInCart > 1 ? $quantityInCart . ' Items' : $quantityInCart . ' Item'  ?> )
				</p>
				<span class="total text-danger"><i class="fa fa-dollar-sign"></i>  
					<?php echo number_format($totalPrice, 2, '.', ','); ?>
				</span>
				<div class="mt-2">
					<a href="<?php echo $home_url ?>/place_order.php" class="btn btn-success btn-sm">
						<i class="fa fa-shopping-cart"></i> Place order
					</a>
				</div>	
			</div>
		</div>

	<?php
		else:
			echo '<div class="alert alert-info">
				No Items in cart!
			</div>';
		endif;	
	?>	
</div>	