<div class="container mt-5">
	<h2>MY CART</h2>
	<?php
		if($msg === 'deleted'){
			echo '<div class="alert alert-info">
					The product was removed from your cart!
				 </div>';
		}

		if(count($cartItemObj->readByUserId()) > 0):

		foreach ($cartItemObj->readByUserId() as $cartItem) :
		$productItem = $productObj->readById( $cartItem['product_id'] );
		$productImg = $productImageObj->readOne( $productItem['id'] );
		$quantityInCart += $cartItem['quantity'];
		$totalPrice += ($productItem['price'] * $cartItem['quantity']); 
	?>

	<hr>
		<div class="row mycart"> 
			<div class="col-sm-8">
				<img src="<?php echo $home_url . '/uploads/images/' . $productImg['name']  ?>" alt="shirt">
				<h6 class="text-uppercase prod-title"> <?php echo $productItem['name'] ?> </h6>
				<p class="prod-description text-muted"> <?php echo $productItem['description'] ?> </p> 
				<form action="<?php echo $home_url ?>/update_cart_quantity.php" method="post">
					<input type="hidden" name="cid" value="<?php echo $cartItem['id'] ?>">
					<label for="quantity">Quantity: </label>
					<input type="number" name="quantity" class="sm-input" id="quantity"  min="0" max="50" value="<?php echo $cartItem['quantity'] ?>">
					<button type="submit" name="update" class="btn btn-dark btn-sm"><i class="fa fa-edit"></i> Update</button>
					<button type="button" class="btn btn-dark btn-sm btn-remove" data-toggle="modal" data-target="#myModal" data-cid="<?php echo $cartItem['id'] ?>">
						<i class="fa fa-trash"></i> Remove  
					</button>
				</form>
			</div>
			<div class="col-sm-4">
				<div class="price text-center mt-5"><i class="fa fa-dollar-sign"></i> <?php echo $productItem['price'] ?> 
					<span class="item-text text-muted"> (<?php echo $cartItem['quantity'] > 1 ? $cartItem['quantity'] . ' Items' : $cartItem['quantity'] . ' Item'  ?>)
					</span>		
				</div>
			</div>
		</div> 
		<!-- end of showing cart -->
	
	<?php
		endforeach;
	?>

	<hr>
	<div class="col-sm-4 text-center offset-sm-8 mb-5">
		<p class="total-label">TOTAL 
			<span class="item-text text-muted"> (<?php echo $quantityInCart > 1 ? $quantityInCart . ' Items' : $quantityInCart . ' Item'  ?>)
			</span>	
		</p> 
		<span class="total text-danger"><i class="fa fa-dollar-sign"></i> 
			<?php echo number_format($totalPrice, 2, '.', ',') ?> 
		</span>
		<div class="mt-5">
			<button class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart"></i> Proceed to checkout</button>
		</div>
	</div>
	<!-- end of total and btns -->


	<div class="modal fade" id="myModal">
		<div class="modal-dialog">
			<div class="modal-content">
					
				<div class="modal-header">
					<h5 class="modal-title"> DELETE </h5>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>

				<div class="modal-body">
					<p>Do you to delete this?</p>
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal" id="btn-confirm-no">No</button>
					<button data-base_url="<?php echo $home_url ?>" class="btn btn-primary" id="btn-confirm-yes">Yes</button>	 
				</div>

			</div>
		</div>
	</div> 
		<!-- end delete confirmation modal -->
	<?php
		else:
			echo '<div class="alert alert-info">
				No records exist!
			</div>';
		endif; 
	?>	

</div>

