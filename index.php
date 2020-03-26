<?php
    require_once 'config/Database.php';

    $database = new Database();

    print_r($database->connect());

?>