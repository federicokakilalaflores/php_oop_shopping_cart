<?php
	
	include_once('config/core.php');
	include_once('config/Database.php');
	include_once('classes/CartItem.php');

	if(isset($_POST['update'])){

		$cid = $_POST['cid'];
		$quantity = $_POST['quantity'];

		$database = new Database();
		$conn = $database->connect();

		$cartItemObj = new CartItem($conn);
		$cartItemObj->quantity = $quantity;

		if($cartItemObj->updateQuantity($cid)){
			header("Location: $home_url/cart.php?msg=updated");
		}else{
			header("Location: $home_url/cart.php?msg=error");
		}			

	}	


?>