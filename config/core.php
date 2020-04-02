<?php

    // show error for development
    error_reporting(E_ALL);
    ini_set('display_errors', TRUE);
	ini_set('display_startup_errors', TRUE);
    
    session_start();

    date_default_timezone_set("Asia/Manila");

    $home_url = "http://localhost/backend-exercises/php_shopping_cart";

    // pagination config

    $current_page = isset($_GET['page']) ? $_GET['page'] : 1;

    $num_per_page = 6; 

    $page_start_num = ($current_page * $num_per_page) - $num_per_page; 

    $ctrl_range = 2;
    
    $ctrl_init_range = ($current_page - $ctrl_range); 

    $ctrl_trail_range = ($current_page + $ctrl_range) + 1; 
?>