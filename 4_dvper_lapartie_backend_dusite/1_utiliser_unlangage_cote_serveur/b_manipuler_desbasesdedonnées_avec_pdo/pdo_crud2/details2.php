<?php include 'header2.php'; ?>


<?php
// details.php

// // Include database connection and header
// require_once 'header2.php';

// // Retrieve disc_id from URL
// $disc_id = $_GET['disc_id'];

// // Retrieve record from disc table
// $sql = "SELECT * FROM disc WHERE disc_id = ?";
// $stmt = $conn->prepare($sql);
// $stmt->bind_param("i", $disc_id);
// $stmt->execute();
// $result = $stmt->get_result();
// $row = $result->fetch_assoc();

// // Display record details
// echo "<p>Title: " . $row['dic_title'] . "</p>";
// echo "<p>Artist: " . $row['artist_name'] . "</p>";
// echo "<p>Image: <img src='images/" . $row['image'] . "'></p>";

// // Links to update and delete forms
// echo "<p><a href='update_form.php?disc_id=" . $disc_id . "'>Update</a> | <a href='delete_script.php?disc_id=" . $disc_id . "'>Delete</a> | <a href='index2.php'>Back to List</a></p>";

// // Include footer
// require_once 'footer2.php';


?>
<body style="background-color: #ff45ff4C;">

<?php
// Connect to the database
 
$servername = "localhost";
$username = "admin";
$password = "Afpa1234";
$dbname = "record";

try{
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $pdo->setAttribute (PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $stmt = $pdo->prepare ("SELECT d.*, a.artist_name, d.disc_picture FROM disc d INNER JOIN artist a ON d.artist_id = a.artist_id WHERE d.disc_id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $album = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if($album){
    ?>

<h1> Détail du disque <?php echo $album['disc_title'];?></h1>
<img src="pictures/<?php echo $album['disc_picture'];?>" alt="<?php echo $album['disc_title'];?>">
<p>
    <strong style="color:blue"> Artiste:</strong> <?php echo $album['artist_name'];?><br>
    <strong style="color:blue"> Année:</strong> <?php echo $album['disc_year'];?><br>
    <strong style="color:blue"> Label:</strong> <?php echo $album['disc_label'];?><br>
    <strong style="color:blue"> Genre:</strong> <?php echo $album['disc_genre'];?><br>
    <strong style="color:blue"> Prix:</strong> <?php echo $album['disc_price'];?>€<br>
</p>
<div class="container col-12">
                
                <form action="update2_form.php" method='GET' class='col-6 mt-5'>
                    <button type='SUBMIT' name='modif' CLASS='btn btn-warning btn-sm' value='<?php echo $album['disc_id']; ?>'>Modifier</button>
                </form>
                <form action="delete2_form.php" method='GET' class='col-6 mt-5'>
                    <button type='SUBMIT' name='delete' CLASS='btn btn-danger btn-sm' value='<?php echo $album['disc_id']; ?>'>Supprimer</button>
                    <button type="button" class="btn btn-success btn-sm" onclick="redirectToAnother()">Retour</button>
                </form>
</div>

<!--       *************             -->
<?php
  }else{
    echo "Aucun disque trouvé avec cet ID";
  }
    }else {
        echo "Erreur : ID manquant";
    }

} catch(PDOException $e){
    echo "Erreur de connexion : ". $e->getMessage();
}
?>






<?php include 'footer2.php'; ?>