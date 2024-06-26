<?php
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