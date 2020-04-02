<?php

    class Database {

        private $host = 'localhost';
        private $username = 'admin';
        private $password = 'admin';
        private $dbname = 'php_shopping_cart';
        private $charset = 'utf8mb4';
        private $conn;

        public function connect() { 

            $this->conn = null;
            try{
                $this->conn = new PDO(
                    "mysql:host=" . $this->host . ";dbname=" . $this->dbname . ";charset" . $this->charset,
                    $this->username,
                    $this->password
                );

                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
                $this->conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);

            }catch(PDOException $e){
                echo "Connection error: " . $e->getMessage();
            }

            return $this->conn;
          
        } // end connect method

    }

