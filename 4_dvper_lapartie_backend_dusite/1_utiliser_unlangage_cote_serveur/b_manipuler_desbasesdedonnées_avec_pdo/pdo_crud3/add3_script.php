<?php
require_once 'database.php';

$conn = connectDB();

$title = $_POST["title"];
$artist_id = $_POST["artist_id"];
$image = $_FILES["image"]["name"];

$sql = "INSERT INTO disc (title, artist_id, image) VALUES (?,?,?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssi", $title, $artist_id, $image);
$stmt->execute();

if ($stmt->affected_rows > 0) {
    echo "Disque ajouté avec succès";
    header("Location: index3.php");
    exit;
} else {
    echo "Erreur lors de l'ajout du disque";
}

closeDB($conn);
?>