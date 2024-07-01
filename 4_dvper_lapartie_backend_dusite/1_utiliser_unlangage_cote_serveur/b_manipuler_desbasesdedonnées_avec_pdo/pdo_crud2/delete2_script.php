<!--           DELETE   PAGE DELETE_FORM: = Supprimer un enregistrement.      -->

<?php include 'header2.php'; ?>

<?php 

echo $_POST['delete'];
if($_POST['SUPP'] == 'oui je supprime'){
    $stmt = $pdo->prepare('DELETE 
    FROM disc
    WHERE disc_id = :id');
    $stmt->bindValue(':id', $_POST['delete']);
    $stmt->execute();

    header('Location:index2.php');
} else {
    header('Location:index2.php');
}

?>