<?php
require_once 'database.php';

$conn = connectDB();

$sql = "SELECT * FROM disc";
$result = query($conn, $sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<p><a href='details3.php?disc_id=". $row["disc_id"]. "'>Détails</a> - ". $row["title"]. "</p>";
    }
} else {
    echo "Aucun enregistrement trouvé";
}

closeDB($conn);
?>

<p><a href="add3_form.php">Ajouter un disque</a></p>