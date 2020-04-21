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


		public function search($search_str, $page_start_num, $num_per_page){
			
			$query = "SELECT * FROM " . $this->table_name .
			" WHERE name LIKE ? LIMIT ?, ?"; 

			$stmt = $this->conn->prepare($query);

			$search_str = htmlspecialchars(strip_tags($search_str));
			
			$search_pattern = "%$search_str%";

			$stmt->bindParam(1, $search_pattern); 
			// $stmt->bindParam(2, $search_pattern); 
			$stmt->bindParam(2, $page_start_num, PDO::PARAM_INT);
			$stmt->bindParam(3, $num_per_page, PDO::PARAM_INT);  

			$stmt->execute();  

			return $stmt->fetchAll(); 

		} // end read method


		public function totalBySeach($search_str){
			$query = "SELECT * FROM " . $this->table_name .
			" WHERE name LIKE ?"; 

			$stmt = $this->conn->prepare($query);

			$search_str = htmlspecialchars(strip_tags($search_str));
			
			$search_pattern = "%$search_str%";

			$stmt->bindParam(1, $search_pattern); 

			if($stmt->execute()){
				return $stmt->rowCount();
			}

			return false; 
		}


		public function readById($pid){

			$query = "SELECT * FROM " . $this->table_name . 
			" WHERE id=? LIMIT 0,1";

			$stmt = $this->conn->prepare($query);

			$pid = htmlspecialchars(strip_tags($pid));

			$stmt->bindParam(1, $pid);

			if($stmt->execute()){
				return $stmt->fetch();
			}

			return false;

		} // end readById method


		public function totalItem(){

			$query = 'SELECT id FROM ' . $this->table_name;

			$stmt = $this->conn->prepare($query);

			if($stmt->execute()){
				return $stmt->rowCount();
			}

			return false;

		} // end totalItem method


		protected function showSqlError($stmt){
			echo "<pre>";
				print_r($stmt->errorInfo);
			echo "</pre>";
		}

	}