<?php

	// global config
    $page_title = "Products";
	include_once('config/core.php');
    $page_url = $home_url . "/product.php";

	// include classes 
    include_once('config/Database.php');
    include_once('classes/Product.php');
    include_once('classes/ProductImage.php');
    include_once('classes/CartItem.php');

    // Database connection
    $database = new Database();
    $conn = $database->connect();
    
    // objects
    $productObj = new Product($conn);
    $productImgObj = new ProductImage($conn);
    $cartItemObj = new CartItem($conn);

    // for showing and paginating products
    $products = $productObj->read($page_start_num, $num_per_page); 
    $totalItem = $productObj->totalItem();
    $total_pages = ceil($totalItem / $num_per_page);

    // total in cart
    $cartItemObj->user_id = 1;
    $inCart = $cartItemObj->countCart(); 

    include_once('layouts/header.php');
    include_once('layouts/navigation_bar.php');
?>

	<div class="container mt-5">

	<?php 

        if(count($products) > 0){

    	    include_once('search_bar.php');
    	    include_once('read_product_template.php');
    	    include_once('paging.php');

        }else{
            echo '<div class="alert alert-info">No product exist!</div>';
        }
	?>
		
	</div> 
	<!-- end container -->

<?php    
    include_once('layouts/footer.php');
?>