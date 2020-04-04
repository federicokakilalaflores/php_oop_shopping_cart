<?php
	include_once('config/core.php');
	include_once('config/Database.php');
	include_once('classes/CartItem.php'); 

	if(isset($_POST['pid']) && isset($_POST['uid'])){
			
		$database = new Database();
		$conn = $database->connect();

		$cartItemObj = new CartItem($conn);

		$cartItemObj->product_id = $_POST['pid']; 
		$cartItemObj->user_id = $_POST['uid']; 
		$cartItemObj->quantity = 1;  

		if($cartItemObj->create()){
			echo "success";
		}else{
			echo "failed";
		}
	}

?>