<?php 

	class Product{

		private $table_name = "tbl_products";
		private $conn = null;

		public $id;
		public $name;
		public $description;
		public $price;
		public $created;

		public function __construct($conn){
			$this->conn = $conn;
		}

		public function read($page_start_num, $num_per_page){
			
			$query = 'SELECT * FROM ' . $this->table_name .
			' ORDER BY created DESC LIMIT ?, ?'; 

			$stmt = $this->conn->prepare($query);
			
			$stmt->bindParam(1, $page_start_num, PDO::PARAM_INT);
			$stmt->bindParam(2, $num_per_page, PDO::PARAM_INT); 

			$stmt->execute();

			return $stmt->fetchAll();

		} // end read method


		public function totalItem(){

			$query = 'SELECT id FROM ' . $this->table_name;

			$stmt = $this->conn->prepare($query);

			if($stmt->execute()){
				return $stmt->rowCount();
			}

			return false;

		}

	}