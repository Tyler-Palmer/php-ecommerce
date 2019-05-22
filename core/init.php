<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$db = new mysqli($servername, $username, $password, 'ecommerce-test');

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
} 
// echo "Connected successfully";

require_once $_SERVER['DOCUMENT_ROOT'].'/php-ecommerce/config.php';
require_once BASEURL.'helpers/helpers.php';