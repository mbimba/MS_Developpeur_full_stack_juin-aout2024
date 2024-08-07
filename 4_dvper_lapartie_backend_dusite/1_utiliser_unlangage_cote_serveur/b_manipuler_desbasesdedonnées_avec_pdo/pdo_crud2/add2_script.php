<!-- FORMULAIRE ADD_SCRIPT: AJOUT script FORMULAIRE //   Afficher le détail d'un enregistrement  -->

<?php
 // Connect to the database
 
//  $servername = "localhost";
//         $username = "admin";
//         $password = "Afpa1234";
//         $dbname = "record";

//         $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//         //Query the database for all records
//         $stmt = $pdo->query('SELECT * FROM artist');
//            // Loop through each record and display it in a table row
//            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
//             echo "<option value='" . $row['artist_id'] . "'>" . $row['name'] . "</option>";
//             }

?>






<?php
require_once('header2.php');

if (isset($_FILES['addimage'])) {

    $file = $_FILES['addimage'];
    $tmp_name = $file['tmp_name'];
    $name = $file['name'];
    $type = $file['type'];
    $size = $file['size'];

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

$name = $_POST['addartist'];

//INSERT un nom d'artiste si il n'existe pas dans la base de donnée.
$stmt = $pdo->prepare("INSERT INTO artist (artist_name) SELECT (:artist) WHERE NOT EXISTS (SELECT * FROM artist WHERE artist_name = :artist);");//ne peut pas mettre values quand il y a un where
$stmt->bindParam(':artist', $name);
$stmt->execute();

//recupere un l'id de l'artiste pour pouvoir le reutiliser apres dans insert de disc
$stock = $pdo->prepare("SELECT * FROM artist WHERE artist_name = :artist");
$stock->bindParam(':artist', $name);
$stock->execute();

//stock de l'id de l'artiste
$artist_id = $stock->fetch()['artist_id'];

//regarde si les données correspond a un disc deja rentrer
$stmt = $pdo->prepare("SELECT * FROM disc WHERE EXISTS (SELECT * FROM disc WHERE disc_title = :title AND disc_year = :year);");
$stmt->bindValue(':title', $_POST['addtitle']);
$stmt->bindValue(':year', $_POST['addyear']);
$stmt->execute();
$disc_id = $stmt->fetch()['disc_id'];
echo $disc_id;

//fait l'insert si le disc n'a pas etatis trouver 
if($disc_id==NULL){
$stmt = $pdo->prepare("INSERT INTO disc (disc_title, disc_year, disc_picture, disc_label, disc_genre, disc_price, artist_id) VALUES (:title, :year, :picture, :label, :genre, :prix, :artist_id);");
$stmt->bindValue(':title', $_POST['addtitle']);
$stmt->bindValue(':year', $_POST['addyear']);
$stmt->bindValue(':prix', $_POST['addprix']);
$stmt->bindParam(':picture', $cheminimage);
$stmt->bindValue(':label', $_POST['addlabel']); 
$stmt->bindValue(':genre', $_POST['addgenre']); 
$stmt->bindParam(':artist_id', $artist_id);//bind param permet de transmettre une variable php en paramètre utile pour mettre un int
$stmt->execute();}

header('Location:index2.php');
?>