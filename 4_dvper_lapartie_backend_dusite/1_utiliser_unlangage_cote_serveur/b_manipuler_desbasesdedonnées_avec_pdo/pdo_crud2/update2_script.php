<!-- UPDATE_SCRIPT:  script mise à jour   -->
                <!-- Inclusion du header -->
<?php include 'header2.php'; ?>


<?php



// Récupération des valeurs des champs de formulaire

$nameartist = $_POST['addartist'];
$nametitle = $_POST['addtitle'];


// Vérification si un fichier est uploadé et différent de l'image actuelle

$verif = $pdo->prepare("SELECT disc_picture FROM disc WHERE disc_title = :name OR disc_id = :id");
$verif->bindParam(':name', $nameartist);
$verif->bindValue(':id', $_POST['modif']);
$verif->execute();
$disc_picture = $verif->fetch()['disc_picture'];

// Récupération de l'ID de l'artiste

$stock = $pdo->prepare("SELECT * FROM artist WHERE artist_name = :artist");
$stock->bindParam(':artist', $nameartist);
$stock->execute();
$artist_id = $stock->fetch()['artist_id'];



// Traitement de l'upload de fichier
if ($_FILES['addimage']['name'] != null) {

    $file = $_FILES['addimage'];

    $tmp_name = $file['tmp_name'];

    $name = $file['name'];

    $type = $file['type'];

    $size = $file['size'];

    echo $type;


    // Vérification du type de fichier et de la taille

    if ($type != 'image/jpeg' && $type != 'image/png') {

        echo 'Erreur : seul les fichiers JPEG et PNG sont autorisés.';

        exit;

    }


    if ($size > 1024 * 1024) { // 1Mo

        echo 'Erreur : le fichier est trop volumineux.';

        exit;

    }


    // Définition du chemin de destination sécurisé
    $cheminimage = uniqid() . '_' . $name;
    $destination = 'pictures/' . $cheminimage;


    // Déplacement du fichier uploadé

    if (move_uploaded_file($tmp_name, $destination)) {

        echo 'Fichier uploadé avec succès !';

    } else {

        echo 'Erreur lors de l\'upload du fichier.';

    }

}

// Insertion de l'artiste dans la base de données

$stmt = $pdo->prepare("INSERT INTO artist (artist_name) SELECT (:artist) WHERE NOT EXISTS (SELECT * FROM artist WHERE artist_name = :artist);");
$stmt->bindValue(':artist', $nameartist);
$stmt->execute();

//si il n'y pas de nouvelle image envoyer ont remet l'ancienne
if($destination == null){
    $destination = $disc_picture;
}

// Mise à jour du disque dans la base de données

$stmt = $pdo->prepare("UPDATE disc 
                        SET disc_title = :title ,disc_year = :year, artist_id = :artist_id , disc_picture = :picture, disc_label = :label, disc_genre = :genre, disc_price = :prix 
                        WHERE disc_id = :id");


$stmt->bindValue(':id', $_POST['modif']);
$stmt->bindValue(':title', $_POST['addtitle']);
$stmt->bindValue(':year', $_POST['addyear']);
$stmt->bindValue(':prix', $_POST['addprix']);
$stmt->bindParam(':picture', $cheminimage);
$stmt->bindValue(':label', $_POST['addlabel']); 
$stmt->bindValue(':genre', $_POST['addgenre']); 
$stmt->bindParam(':artist_id', $artist_id);






//affiche un message d'erreur si il y a un probleme
try {

    $stmt->execute();

} catch (PDOException $e) {

    echo 'Erreur lors de l\'exécution de la requête : ' . $e->getMessage();

}
    header('Location:index2.php');
?>




<?php include 'footer2.php'; ?>