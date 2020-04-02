<?php 

	class CartItem{

		private $table_name = "tbl_cart_items";
		private $conn = null;

		public $id;
		public $quantity;
		public $product_id;
		public $user_id;
		public $created;

		public function __construct($conn){
			$this->conn = $conn;
		}


		public function isExist($user_id, $product_id){

			$query = "SELECT COUNT(*) FROM " . $this->table_name .
			" WHERE user_id = :user_id AND product_id = :product_id";

			$stmt = $this->conn->prepare($query);

			$user_id = htmlspecialchars(strip_tags($user_id));
			$product_id = htmlspecialchars(strip_tags($product_id)); 

			$stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
			$stmt->bindParam(':product_id', $product_id, PDO::PARAM_INT);

			$stmt->execute();

			$rows = $stmt->fetch(PDO::FETCH_NUM);

			return $rows[0];

		}	
	}	
