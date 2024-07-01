
<!--              PAGE DELETE_FORM:     -->

<?php include 'header2.php'; ?>
<?php

                $stmt = $pdo->prepare("SELECT * FROM disc d LEFT JOIN artist a ON d.artist_id = a.artist_id WHERE disc_id=?");
                
                $stmt->execute(array($_GET['delete']));
            
                $result = $stmt->fetch();

?>
<h1>Formulaire de suppression</h1>
            <div class='container'>
                <div class='row justify-content-center'>
                    <img src="pictures/<?php echo $result['disc_picture'];?>" class="img-fluid rounded-start col-6">
                    <div class="col-6">
                        <h2 class='text-info'><?php echo $result['disc_title'];?></h2>
                        <p class='text-info'>Artist : <?php echo $result['artist_name'];?></p>
                        <p class='text-info'>Label : <?php echo $result['disc_label'];?></p>
                        <p class='text-info'>Year : <?php echo $result['disc_year'];?></p>
                        <p class='text-info'>Genre : <?php echo $result['disc_genre'];?></p>
                        <p class='text-info'>Prix : <?php echo $result['disc_price'];?></p>
                    </div>

     
        <form action='delete2_script.php' method='POST' class='row justify-content-center'>

            <label class='mt-2 text-danger' for='SUPP'>Veuillez confirmer la suppresion en écrivant la phrase suivante : oui je supprime</label><br><input type='text' class='mt-2' id='SUPP' name='SUPP' required><br>
            <button type='submit' name='delete' value='<?php echo $_GET['delete']; ?>' class='btn btn-danger btn-sm'>Supprimer</button>

        </form>
    </div>
  


    <?php include 'footer2.php'; ?>