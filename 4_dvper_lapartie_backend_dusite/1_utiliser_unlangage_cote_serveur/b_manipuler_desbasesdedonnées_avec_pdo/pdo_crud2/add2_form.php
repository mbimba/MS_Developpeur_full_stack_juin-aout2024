<!-- FORMULAIRE ADD -->

<?php include 'header2.php'; ?>



<h1>Ajouter un vinyle</h1>

<form action="add2_script.php" method="POST" enctype="multipart/form-data" id="myForm">
    <div class="form-group col-md-6">
        <label for="title">Title :</label>

        <input type="text" name="title" id="title" name='ajouttitle' class="form-control" placeholder="Enter title"><br>
    </div>

<!-- ******************Artist************* -->
<?php
    $name_artist = $pdo->prepare("SELECT * FROM artist");
    $name_artist -> execute();
    $stock = $name_artist->fetchALL();
    ?>
    <div class="form-group col-md-6">
    <label for="artist">Artist :</label>  <input type="text" name="ajoutartist" id="artiste" ><br>
    <select name="artist" id="artist" required>
    <option value="">-- Sélectionner un artiste --</option>
    <?php
    foreach($stock as $key){
        echo '<option value="'.$key['artist_name'].'">'.$key['artist_name'].'</option>';
    }
    ?>
   
            <!-- Ici, je dois remplacer la requête SQL pour récupérer les artistes de votre base de données -->


        </select><br><br>
        </div>
<!-- ****************** year ************* -->
        <div class="form-group col-md-6">
        <label for="">year :</label> 
        <input  class="form-control" type="number" name="ajoutyear" id="year" min="1900" max="2024" required><br>
        </div>
<!-- ****************** genre ************* -->
        <div class="form-group col-md-6">
        <label for="genre">Genre :</label>
        <input class="form-control" type="genre" name="ajoutgenre" id=""placeholder="Enter genre (Rock, Pop, Prog...)" ><br>
        </div>

<!-- ****************** label ************* -->
        <div class="form-group col-md-6">
        <label for="year">Label :</label>
        <input class="form-control" type="label" name="ajoutlabel" id=""placeholder="Enter label (EMI, Warner, PolyGram, Univers sale...)" ><br>
        </div>

        <div class="form-group col-md-6">
        <label for="year">Price :</label>
        <input class="form-control" type="price" name="ajoutprix" id="" ><br>
        </div>

        <div class="form-group col-md-6">
        <label for="image">Image du disque :</label><br><br>
        <input type="file" name="ajoutimage" id="image" accept="image/*" required> <br><br>
        <button type="submit" class="btn btn-primary btn-sm " onclick="ajout()">Ajouter</button>          <!--    "btn-sm": pour réduire la taille du bouton -->
        <button type="button" class="btn btn-primary btn-sm" onclick="redirectToAnother()">Retour</button><br><br>
        </div>


</form>











<?php include 'footer2.php'; ?>