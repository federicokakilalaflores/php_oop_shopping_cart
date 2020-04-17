<?php
	
	// global config
	$page_title = "My Cart";
    $msg = isset($_GET['msg']) ? $_GET['msg'] : "";
	include_once('config/core.php');

	// include classes 
    include_once('config/Database.php');
    include_once('classes/Product.php');
    include_once('classes/ProductImage.php');
    include_once('classes/CartItem.php');

     // Database connection
    $database = new Database();
    $conn = $database->connect();

    $productObj = new Product($conn);
    $productImageObj = new ProductImage($conn);
    $cartItemObj = new CartItem($conn);

    // total in cart
    $cartItemObj->user_id = 1;
    $inCart = $cartItemObj->countCart();
    $quantityInCart = 0;
    $totalPrice = 0;

    include_once('layouts/header.php');
    include_once('layouts/navigation_bar.php');
    include_once('read_cart_template.php');
    include_once('layouts/footer.php');

?>