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

	}