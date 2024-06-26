<?php
$servername = "localhost";
$username = "admin";
$password = "Afpa1234";
$dbname = "thedistrict";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>




<?php 
require_once "db_connect.php";
require_once "header.php"; 

// Your page-specific PHP code goes here

require_once "footer.php"; 
?>