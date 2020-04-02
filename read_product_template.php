<hr>	
	<div class="row" id="items">
		<?php 
			foreach ($products as $product) :
			$productImg = $productImgObj->readOne( $product['id'] );	
		?>
			<div class="col-md-4 mt-5" >
				<figure class="item h-100">
					<img src="uploads/images/<?php echo $productImg['name'] ?>" class="mb-4">
					<h6 class="text-uppercase"><?php echo $product['name'] ?></h6>
					<span class="price text-center d-block mb-3"><i class="fa fa-dollar-sign"></i> <?php echo number_format($product['price'], 2, '.', ',') ?></span>
					<?php
						if($cartItemObj->isExist(1,1) > 0){
							echo '<button class="btn-block btn-disabled" disabled> 
								<i class="fa fa-shopping-cart"></i> Already added
							</button>';
						}else{
							echo '<button class="btn-block btn-active btn-cart" data-pid="' . $product['id'] . '" data-uid="1">
								<i class="fa fa-shopping-cart"></i> Add to cart 
							</button>';
						}
					?>
				</figure>
			</div> 
		<?php
			endforeach; 
		?>	
	</div>
<hr>	
