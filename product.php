<?php

    include_once('config/core.php');
    include_once('layouts/header.php');
    include_once('layouts/navigation_bar.php');

?>

	<div class="container mt-5">
		<div class="col-md-4 offset-md-8">
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Search Product...">
				<div class="input-group-append">
					<button type="submit" class="btn btn-primary">
						<i class="fa fa-search"></i> 
					</button>
				</div>
			</div>	
		</div> 
		<!-- end search bar -->

		<div class="row" id="items">
			<div class="col-md-4 mt-5" >
				<figure class="item">
					<img src="uploads/images/p102.jpg" class="mb-4">
					<h6 class="text-uppercase">Lebron James Men's Navy Cleveland Cavaliers Adidas Swingman Jersey</h6>
					<p class="mt-2 text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod. </p>
					<span class="price text-center d-block mb-3">PHP 599.00</span>
					<button class="btn-block"><i class="fa fa-shopping-cart"></i> Add to cart</button>
				</figure>
			</div> 
			<div class="col-md-4 mt-5" >
				<figure class="item">
					<img src="uploads/images/p102.jpg" class="mb-4">
					<h6 class="text-uppercase">Lebron James Men's Navy Cleveland Cavaliers Adidas Swingman Jersey</h6>
					<p class="mt-2 text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
					<span class="price text-center d-block mb-3">PHP 599.00</span>
					<button class="btn-block"><i class="fa fa-shopping-cart"></i> Add to cart</button>
				</figure>
			</div> 
			<div class="col-md-4 mt-5" >
				<figure class="item">
					<img src="uploads/images/p102.jpg" class="mb-4">
					<h6 class="text-uppercase">Lebron James Men's Navy Cleveland Cavaliers Adidas Swingman Jersey</h6>
					<p class="mt-2 text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
					<span class="price text-center d-block mb-3">PHP 599.00</span>
					<button class="btn-block"><i class="fa fa-shopping-cart"></i> Add to cart</button>
				</figure>
			</div> 

			<div class="col-md-4 mt-5" >
				<figure class="item">
					<img src="uploads/images/p102.jpg" class="mb-4">
					<h6 class="text-uppercase">Lebron James Men's Navy Cleveland Cavaliers Adidas Swingman Jersey</h6>
					<p class="mt-2 text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
					<span class="price text-center d-block mb-3">PHP 599.00</span>
					<button class="btn-block"><i class="fa fa-shopping-cart"></i> Add to cart</button>
				</figure>
			</div> 
			<div class="col-md-4 mt-5" >
				<figure class="item">
					<img src="uploads/images/p102.jpg" class="mb-4">
					<h6 class="text-uppercase">Lebron James Men's Navy Cleveland Cavaliers Adidas Swingman Jersey</h6>
					<p class="mt-2 text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
					<span class="price text-center d-block mb-3">PHP 599.00</span>
					<button class="btn-block"><i class="fa fa-shopping-cart"></i> Add to cart</button>
				</figure>
			</div> 
		</div>

	</div> 
	<!-- end container -->

<?php    
    include_once('layouts/footer.php');
?>