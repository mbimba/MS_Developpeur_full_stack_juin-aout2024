<!-- FORMULAIRE ADD -->

<?php include 'header2.php'; ?>



<h1>Ajouter un vinyle</h1>

<form action="add2_script.php" method="post" enctype="multipart/form-data" id="myForm">
    <div class="form-group col-md-6">
        <label for="title">Title</Title> :</label>

        <input type="text" name="title" id="title" class="form-control" placeholder="Enter title"><br>
    </div>

<!-- ******************Artist************* -->
<?php
    $name_artist = $pdo->prepare("SELECT * FROM artist");
    $name_artist -> execute();
    $stock = $name_artist->fetchALL();
    ?>
    <div class="form-group col-md-6">
    <label for="artist">Artist :</label>
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
        <?php
    $year = $pdo->prepare("SELECT disc_year FROM disc");
    $year -> execute();
    $stockyear = $year->fetchALL();
    ?>
        <div class="form-group col-md-6">
        <label for="">year :</label> 
        <?php
    foreach($stockyear as $key){
        echo '<label for="'.$key['disc_year'].'">'.$key['dic_year'].'</label>';
    }
    ?>
        <input  class="form-control" type="number" name="year" id="year" min="1900" max="2024" required><br>
        </div>
<!-- ****************** genre ************* -->
        <?php
    $genre = $pdo->prepare("SELECT disc_genre FROM disc");
    $genre -> execute();
    $stockgenre = $genre->fetchALL();
    ?>
        <div class="form-group col-md-6">
        <label for="genre">Genre :</label>
        <?php
    foreach($stockgenre as $row){
        echo '<label for="'.$row['disc_year'].'">'.$row['dic_year'].'</label>';
    }
    ?>
        <input class="form-control" type="genre" name="genre" id=""placeholder="Enter genre (Rock, Pop, Prog...)" ><br>
        </div>

<!-- ****************** label ************* -->
        <div class="form-group col-md-6">
        <label for="year">Label :</label>
        <input class="form-control" type="label" name="label" id=""placeholder="Enter label (EMI, Warner, PolyGram, Univers sale...)" ><br>
        </div>

        <div class="form-group col-md-6">
        <label for="year">Price :</label>
        <input class="form-control" type="price" name="price" id="" ><br>
        </div>

        <div class="form-group col-md-6">
        <label for="image">Image du disque :</label><br><br>
        <input type="file" name="image" id="image" accept="image/*" required> <br><br>
        <button type="submit" class="btn btn-primary btn-sm" onclick="envoicontact()">Ajouter</button>
        <button type="button" class="btn btn-primary btn-sm" onclick="redirectToAnother()">Retour</button><br><br>
        </div>


</form>











<?php include 'footer2.php'; ?>