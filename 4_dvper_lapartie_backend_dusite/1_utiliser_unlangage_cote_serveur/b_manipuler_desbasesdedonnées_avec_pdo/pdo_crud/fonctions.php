<?php
function getDisques() {
    $db = connexion();
    $requete = "SELECT * FROM disc";
    $resultat = $db->query($requete);
    $disques = $resultat->fetchAll();
    return $disques;
}

function getDisque($disc_id) {
    $db = connexion();
    $requete = "SELECT * FROM disc WHERE disc_id = :disc_id";
    $stmt = $db->prepare($requete);
    $stmt->bindParam(':disc_id', $disc_id);
    $stmt->execute();
    $disque = $stmt->fetch();
    return $disque;
}

function getArtistes() {
    $db = connexion();
    $requete = "SELECT * FROM artist";
    $resultat = $db->query($requete);
    $artistes = $resultat->fetchAll();
    return $artistes;
}

function addDisque($title, $artist_id, $year, $genre, $label, $price, $picture) {
    $db = connexion();
    $requete = "INSERT INTO disc (title, artist_id, year, genre, label, price, picture) VALUES (:title, :artist_id, :year, :genre, :label, :price, :picture)";
    $stmt = $db->prepare($requete);
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':artist_id', $artist_id);
    $stmt->bindParam(':year', $year);
    $stmt->bindParam(':genre', $genre);
    $stmt->bindParam(':label', $label);
    $stmt->bindParam(':price', $price);
    $stmt->bindParam(':picture', $picture);
    $stmt->execute();
}

function updateDisque($disc_id, $title, $artist_id, $year, $genre, $label, $price, $picture) {
    $db = connexion();
    $requete = "UPDATE disc SET title = :title, artist_id = :artist_id, year = :year, genre = :genre, label = :label, price = :price, picture = :picture WHERE disc_id = :disc_id";
    $stmt = $db->prepare($requete);
    $stmt->bindParam(':disc_id', $disc_id);
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':artist_id', $artist_id);
    $stmt->bindParam(':year', $year);
    $stmt->bindParam(':genre', $genre);
    $stmt->bindParam(':label', $label);
    $stmt->bindParam(':price', $price);
    $stmt->bindParam(':picture', $picture);
    $stmt->execute();
}

function deleteDisque($disc_id) {
    $db = connexion();
    $requete = "DELETE FROM disc WHERE disc_id = :disc_id";
    $stmt = $db->prepare($requete);
    $stmt->bindParam(':disc_id', $disc_id);
    $stmt->execute();
}

function connexion() {
    $db = new PDO('mysql:host=localhost;dbname=your_database', 'your_username', 'your_password');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $db;
}
?>