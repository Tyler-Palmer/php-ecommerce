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
echo "Connected successfully";

define('BASEURL', '/php-ecommerce/');
