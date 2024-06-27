<?php
 // Connect to the database
 
 $servername = "localhost";
        $username = "admin";
        $password = "Afpa1234";
        $dbname = "record";

        $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        //Query the database for all records
        $stmt = $pdo->query('SELECT * FROM artist');
           // Loop through each record and display it in a table row
           while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<option value='" . $row['artist_id'] . "'>" . $row['name'] . "</option>";
            }


       

// 1: Récupération des informations transmises par le formulaire. 
$title = $_POST['disc_title'];
$artist = $_POST['disc_artist'];
$year = $_POST['disc_year'];
$genre = $_POST['disc_genre'];
$label = $_POST['disc_label'];
$price = $_POST['disc_price'];
$image = $_FILES['image'];

// 2: Enregistrement des données dans la base (à l'aide d'une requête INSERT): Insert data into disc table
$sql = "INSERT INTO disc (title, artist_id, year, genre, label, price, image) VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt = $pdo->query("ssssss", $title, $artist_id, $year, $genre, $label, $price);
$stmt->execute();




if ($stmt->affected_rows > 0) {

        echo "Disque ajouté avec succès";
    
        header("Location: index2.php");
    
        exit;
    
    } else {
    
        echo "Erreur lors de l'ajout du disque";
    
    }

//3: Prise en compte du fichier uploader: Upload image

move_uploaded_file($image['tmp_name'], 'images/' . $image['name']);


// 4: Redirection vers la page de liste: index2

header("Location: index2.php");

?>