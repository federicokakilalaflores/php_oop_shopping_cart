<?php

	class ProductImage {

		private $table_name = "tbl_product_images";
		private $conn = null;

		public $id;
		public $name;
		public $created;

		public function __construct($conn) {
			$this->conn = $conn;
		}

		public function readOne($pid){

			$query = 'SELECT * FROM ' . $this->table_name . 
			' WHERE product_id = :pid ORDER BY name DESC LIMIT 0, 1';

			$stmt = $this->conn->prepare($query);

			$pid = htmlspecialchars(strip_tags($pid));	

			$stmt->bindParam(':pid', $pid, PDO::PARAM_INT);

			if($stmt->execute()){
				return $stmt->fetch();
			}

			return false;

		}

	}