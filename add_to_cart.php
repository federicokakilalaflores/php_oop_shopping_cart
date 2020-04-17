<?php
	include_once('config/core.php');
	include_once('config/Database.php');
	include_once('classes/CartItem.php'); 

	if(isset($_POST['pid']) && isset($_POST['uid'])){

		$msg;
		$inCart = 0;
			
		$database = new Database();
		$conn = $database->connect();

		$cartItemObj = new CartItem($conn);

		$cartItemObj->product_id = $_POST['pid']; 
		$cartItemObj->user_id = $_POST['uid']; 
		$cartItemObj->quantity = 1;   

		if($cartItemObj->create()){
			$inCart = $cartItemObj->countCart(); 
			$msg = "success";
		}else{
			$msg = "failed";	
		}

		echo json_encode(["message" => $msg, "inCart" => $inCart]);  

	}

?>