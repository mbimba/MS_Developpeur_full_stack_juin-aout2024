<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header / Menu </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="Lignerouge.css" rel="stylesheet">
</head>
<body>
    
<header>
      <!--        NAVBAR ENTETE         SANS L'ONGLET DE RECHERCHE      -->
      <nav class="navbar navbar-expand-sm navbar-dark bg-dark fs-2  fixed-top">
        <div class="container-fluid-flex "> 
          <a href="index.php"> <!-- Lien vers la page d'accueil avec le logo -->
          <img src="images_the_district/the_district_brand/facebook_cover_photo_1.png" class="object-fit-contain border rounded" width="80" alt="">  <!-- Image du logo avec des styles -->
          </a>
        </div>
        <div class="container-fluid d-flex justify-content-evenly " >  <!-- Conteneur pour les liens de navigation -->
          <ul class="navbar-nav">    <!-- Liste non ordonnée pour les liens de navigation -->
            <li class="nav-item col-sm-4 "> <!-- Lien vers index.php avec la classe "active" si la page actuelle est index.php -->
              <a class="nav-link <?php if ($_SERVER['REQUEST_URI'] == "/index.php") {echo "active";}?> espace" href="index.php">Accueil</a>
            </li>
            <li class="nav-item col-sm-4 "> <!-- Lien vers categorie.php avec la classe "active" si la page actuelle est categorie.php ou l'une des sous-catégories -->
              <a class="nav-link <?php if ($_SERVER['REQUEST_URI'] == "/categorie.php"||$_SERVER['REQUEST_URI'] == "/platcategorieasiatique.php"||$_SERVER['REQUEST_URI'] == "/platcategorieburger.php" ||$_SERVER['REQUEST_URI'] == "/platcategoriegrillade.php" ||$_SERVER['REQUEST_URI'] == "/platcategoriepate.php" ||$_SERVER['REQUEST_URI'] == "/platcategoriepizza.php" ||$_SERVER['REQUEST_URI'] == "/platcategoriesalade.php" ||$_SERVER['REQUEST_URI'] == "/platcategoriesandwich.php" ||$_SERVER['REQUEST_URI'] == "/platcategorievegan.php") {echo "active";}?>  espace" href="categorie.php">Catégorie</a>
            </li>
            <li class="nav-item col-sm-4 ">   <!-- Lien vers touslesplats.php avec la classe "active" si la page actuelle est touslesplats.php -->
              <a class="nav-link <?php if ($_SERVER['REQUEST_URI'] == "/touslesplats.php") {echo "active";}?>  espace" href="touslesplats.php">Plat</a>
            </li>
            <li class="nav-item col-sm-4 "> <!-- Lien vers contact.php avec la classe "active" si la page actuelle est contact.php -->
              <a class="nav-link <?php if ($_SERVER['REQUEST_URI'] == "/contact.php") {echo "active";}?>  espace " href="contact.php">Contact</a>
            </li>
          </ul>
         
        </div>
      </nav>

      <?php  echo "<script> console.log('".$_SERVER['REQUEST_URI']."')</script>" ;?>

    </header>





































