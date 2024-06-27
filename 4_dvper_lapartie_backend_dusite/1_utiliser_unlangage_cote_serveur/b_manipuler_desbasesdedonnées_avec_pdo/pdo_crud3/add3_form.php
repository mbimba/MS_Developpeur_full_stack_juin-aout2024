<?php
require_once 'database.php';

$conn = connectDB();

$sql = "SELECT * FROM artist";
$result = query($conn, $sql);

if ($result->num_rows > 0) {
    echo "<form action='add3_script.php' method='post' enctype='multipart/form-data'>";
    echo "<label for='title'>Titre :</label><br>";
    echo "<input type='text' id='title' name='title'><br>";
    echo "<label for='artist_id'>Artiste :</label><br>";
    echo "<select id='artist_id' name='artist_id'>";
    while($row = $result->fetch_assoc()) {
        echo "<option value='". $row["artist_id"]. "'>". $row["name"]. "</option>";
    }
    echo "</select><br>";
    echo "<label for='image'>Image :</label><br>";
    echo "<input type='file' id='image' name='image'><br>";
    echo "<input type='submit' value='Ajouter'>";
    echo "</form>";
} else {
    echo "Aucun artiste trouvé";
}

closeDB($conn);
?>