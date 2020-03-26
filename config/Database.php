<?php

    class Database {

        private $host = '127.0.0.1';
        private $username = 'admin';
        private $password = 'admin';
        private $dbname = 'php_shopping_cart';
        private $charset = 'utf8mb4';
        private $conn = null;

        public function connect() {

            try{
                $this->conn = new PDO(
                    "mysql:host=" . $this->host . ";dbname=" . $this->dbname . ";charset" . $this->charset,
                    $this->username,
                    $this->password
                );

            }catch(PDOException $e){
                echo "Connection error: " . $e->getMessage();
            }

            return $this->conn;
          
        } // end connect method

    }

