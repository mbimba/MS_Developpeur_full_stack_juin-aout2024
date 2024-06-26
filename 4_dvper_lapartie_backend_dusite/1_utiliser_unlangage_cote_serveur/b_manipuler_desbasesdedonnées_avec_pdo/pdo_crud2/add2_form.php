<!-- FORMULAIRE ADD -->

<?php include 'header2.php'; ?>



<h1>Ajouter un vinyle</h1>

<form action="add_script.php" method="post" enctype="multipart/form-data">
    <div class="form-group col-md-6">
        <label for="title">Title</Title> :</label>

        <input type="text" name="title" id="title" class="form-control" placeholder="Enter title"><br>
    </div>

    <div class="form-group col-md-6">
    <label for="artist">Artist :</label>
    <select name="artist" id="artist" required>
    <option value="">-- Sélectionner un artiste --</option>
   
            <!-- Ici, je dois remplacer la requête SQL pour récupérer les artistes de votre base de données -->

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
            ?>

        </select><br><br>
        </div>

        <div class="form-group col-md-6">
        <label for="year">year :</label>
        <input  class="form-control" type="number" name="year" id="year" min="1900" max="2024" required><br>
        </div>

        <div class="form-group col-md-6">
        <label for="year">Genre :</label>
        <input class="form-control" type="genre" name="genre" id=""placeholder="Enter genre (Rock, Pop, Prog...)" ><br>
        </div>

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
        <button type="button" class="btn btn-primary btn-sm">Ajouter</button>
        <button type="button" class="btn btn-primary btn-sm">Retour</button><br><br>
        </div>






























<?php include 'footer2.php'; ?>