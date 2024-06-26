
<?php
session_start();
function connect(){
    $servername = "localhost";
    $username = "admin";
    $password = "Afpa1234";
    $dbname = "thedistrict";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>


















<!DOCTYPE html>
<html>
<head>
    <title>My CRUD Application</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <header>
        <h1>My CRUD Application</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="add.php">Add</a></li>
            </ul>
        </nav>
    </header>