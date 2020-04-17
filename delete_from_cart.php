<?php

	include_once('config/core.php');
	include_once('config/Database.php');
	include_once('classes/CartItem.php');

	if(isset($_GET['cid'])){

		$cid = $_GET['cid'];

		$database = new Database();
		$conn = $database->connect();

		$cartItemObj = new CartItem($conn);

		if($cartItemObj->deleteById($cid)){
			header("Location: $home_url/cart.php?msg=deleted");
		}else{
			header("Location: $home_url/cart.php?msg=error");
		}			

	}	

?>