<?php
	
	$page_title = "Thank You!";

	include_once('config/core.php');	
	include_once('config/Database.php');	
	include_once('classes/CartItem.php');	

	$database = new Database();
	$conn = $database->connect();

	$cartItemObj = new CartItem($conn);
	$cartItemObj->user_id = 1;
    $inCart = $cartItemObj->countCart();


	include_once('layouts/header.php');
	include_once('layouts/navigation_bar.php');

?>	
	<div class="container mt-5">
		<h2 class="text-uppercase"><?php echo $page_title ?></h2> 
		<hr>
		<?php
			if(!$cartItemObj->deleteAllByUser()){ 
				echo '<div class="alert alert-warning">
				<i class="fa fa-times"></i> Unable to place your order. Something went wrong.
				</div>';
			}else{
				echo '<div class="alert alert-success">
				<i class="fa fa-check"></i> <b>Your order has been placed.</b> Thank you very much!
				</div>';
			}
		?>
	</div>

<?php
	include_once('layouts/footer.php');
?>	
