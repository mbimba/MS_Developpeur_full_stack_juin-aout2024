<!-- FORMULAIRE ADD -->

<?php include 'header2.php'; ?>



<h1>Ajouter un vinyle</h1>

<form action="add2_script.php" method="POST" enctype="multipart/form-data" id="">
    <div class="form-group col-md-6">
        <label for="title">Title :</label>

        <input type="text" id="title" name='addtitle' class="form-control" placeholder="Enter title"><br>
    </div>

<!-- ******************Artist************* -->
    <div class="form-group col-md-6">
    <label for="artist">Artist :</label>  
    <input type="text" name="addartist" class="form-control" id="artiste" ><br>
        </div>
<!-- ****************** year ************* -->
        <div class="form-group col-md-6">
        <label for="">year :</label> 
        <input  class="form-control" type="number" name="addyear" id="year" min="1900" max="2024" required><br>
        </div>
<!-- ****************** genre ************* -->
        <div class="form-group col-md-6">
        <label for="genre">Genre :</label>
        <input class="form-control" type="genre" name="addgenre" id=""placeholder="Enter genre (Rock, Pop, Prog...)" ><br>
        </div>

<!-- ****************** label ************* -->
        <div class="form-group col-md-6">
        <label for="year">Label :</label>
        <input class="form-control" type="label" name="addlabel" id=""placeholder="Enter label (EMI, Warner, PolyGram, Univers sale...)" ><br>
        </div>

        <div class="form-group col-md-6">
        <label for="year">Price :</label>
        <input class="form-control" type="price" name="addprix" id="" ><br>
        </div>
<!-- ****************** Image ************* -->
        <div class="form-group col-md-6">
        <label for="image">Image du disque :</label><br><br>
        <input type="file" name="addimage" id="image" accept="image/*" required> <br><br>
        <button type="submit" class="btn btn-primary btn-sm " onclick="ajout()">Ajouter</button>          <!--    "btn-sm": pour réduire la taille du bouton -->
        <button type="button" class="btn btn-primary btn-sm" onclick="redirectToAnother()">Retour</button><br><br>
        </div>


</form>











<?php include 'footer2.php'; ?>