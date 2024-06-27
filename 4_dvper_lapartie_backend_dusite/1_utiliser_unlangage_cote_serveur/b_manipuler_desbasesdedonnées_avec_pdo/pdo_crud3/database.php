<?php
function connectDB() {
    $servername = "localhost";
    $username = "admin";
    $password = "Afpa1234";
    $dbname = "record";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: ". $conn->connect_error);
    }

    return $conn;
}

function closeDB($conn) {
    $conn->close();
}

function query($conn, $sql) {
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result;
}

function queryBind($conn, $sql, $params) {
    $stmt = $conn->prepare($sql);
    $stmt->bind_param($params);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result;
}
?>