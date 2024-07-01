<!--              PAGE UPDATE_FORM                   -->

<?php include 'header2.php'; ?>


<?php
                $stmt = $pdo->prepare("SELECT * FROM disc d LEFT JOIN artist a ON d.artist_id = a.artist_id WHERE disc_id=?");
                
                $stmt->execute(array($_GET['modif']));
               
                $result = $stmt->fetch();

                ?>
<!-- ******************                 MON FORMULAIRE               ************* -->

<div class='container'>
<form action="add2_script.php" method="POST" enctype="multipart/form-data" id="">
    <div class="form-group col-md-6">
        <label for="title">Title :</label>

        <input type="text" id="title" name='addtitle' value='<?php echo $result['disc_title']; ?>' required class="form-control" placeholder="Enter title"><br>
    </div>

<!-- ******************Artist************* -->
    <div class="form-group col-md-6">
    <label for="artist">Artist :</label>  
    <input type="text" name="addartist" value='<?php echo $result['artist_name']; ?>' required class="form-control" id="artiste" ><br>
        </div>
<!-- ****************** year ************* -->
        <div class="form-group col-md-6">
        <label for="">year :</label> 
        <input  class="form-control" type="number" name="addyear" value='<?php echo $result['disc_year']; ?>' required id="year" min="1900" max="2024" required><br>
        </div>
<!-- ****************** genre ************* -->
        <div class="form-group col-md-6">
        <label for="genre">Genre :</label>
        <input class="form-control" type="genre" name="addgenre" value='<?php echo $result['disc_genre']; ?>' required id="" placeholder="Enter genre (Rock, Pop, Prog...)" ><br>
        </div>

<!-- ****************** label ************* -->
        <div class="form-group col-md-6">
        <label for="year">Label :</label>
        <input class="form-control" type="label" name="addlabel" value='<?php echo $result['disc_label']; ?>' required id=""placeholder="Enter label (EMI, Warner, PolyGram, Univers sale...)" ><br>
        </div>

        <div class="form-group col-md-6">
        <label for="year">Price :</label>
        <input class="form-control" type="price" name="addprix" value='<?php echo $result['disc_price']; ?>' required id="" ><br>
        </div>
<!-- ****************** Image ************* -->
        <div class="form-group col-md-6">
        <label for="image">Image du disque :</label><br><br>
        <input type="file" name="addimage" id="image" accept="image/*<?php echo $result['disc_picture']; ?>" alt='<?php echo $result['disc_title']; ?>' required> <br><br>

        <button type="submit" class="btn btn-primary btn-sm" name="modif" value='<?php echo $_GET['modif']; ?>' onclick="ajout()">Ajouter</button>          <!--    "btn-sm": pour réduire la taille du bouton -->
        <button type="button" class="btn btn-primary btn-sm" onclick="redirectToAnother()">Retour</button><br><br>
        </div>


</form>
</div>


























<?php include 'footer2.php'; ?>