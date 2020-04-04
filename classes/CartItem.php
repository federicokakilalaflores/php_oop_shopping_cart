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

		public function create(){

			$query = "INSERT INTO " . $this->table_name . 
			" (product_id, quantity, user_id, created) 
			  VALUES (:pid, :quantity, :uid, :created)";

			$stmt = $this->conn->prepare($query);

			$this->quantity = htmlspecialchars(strip_tags($this->quantity));
			$this->product_id = htmlspecialchars(strip_tags($this->product_id));
			$this->user_id = htmlspecialchars(strip_tags($this->user_id));
			$this->created = date('Y-m-d H:i:s');

			$stmt->bindParam(':pid', $this->product_id);
			$stmt->bindParam(':quantity', $this->quantity);
			$stmt->bindParam(':uid', $this->user_id);
			$stmt->bindParam(':created', $this->created);

			if($stmt->execute()){
				return true;
			}

			$this->showSqlError($stmt);
			return false;

		}	

		protected function showSqlError($stmt){
			echo "<pre>";
				print_r($stmt->errorInfo);
			echo "</pre>";
		}
	}	
