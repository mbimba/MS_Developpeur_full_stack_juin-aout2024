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
<body  style="background-color: #4A394a;">
    
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
              <a class="nav-link <?php if ($_SERVER['REQUEST_URI'] == "/categorie.php") {echo "active";}?>  espace" href="categorie.php">Catégorie</a>
            </li>
            <li class="nav-item col-sm-4 ">   <!-- Lien vers touslesplats.php avec la classe "active" si la page actuelle est touslesplats.php -->
              <a class="nav-link <?php if ($_SERVER['REQUEST_URI'] == "/plats.php") {echo "active";}?>  espace" href="plats.php">Plat</a>
            </li>
            <li class="nav-item col-sm-4 "> <!-- Lien vers contact.php avec la classe "active" si la page actuelle est contact.php -->
              <a class="nav-link <?php if ($_SERVER['REQUEST_URI'] == "/contact.php") {echo "active";}?>  espace " href="contact.php">Contact</a>
            </li>
          </ul>
         
        </div>
      </nav>

      <?php  echo "<script> console.log('".$_SERVER['REQUEST_URI']."')</script>" ;?>

      <!-- MA VIDEO + BARRE DE RECHERCHE  -->  
     
<div class="image-container position-relative"> 
<?php if (basename($_SERVER['SCRIPT_NAME']) != 'commande.php' && basename($_SERVER['SCRIPT_NAME'])!= 'politique_deconfidentialite.php' && basename($_SERVER['SCRIPT_NAME'])!= 'mentions_legales.php') { ?> /<!-- Code pour afficher le fond vidéo: Ajout de la condition pour ne pas afficher la vidéo sur les pages de commande, politique de confidentialité et mentions légales -->
  <div class="row g-0"> 

    <video id="video" class="col-12 mb-0 mt-0" src="images_the_district/11659-231758756_small.mp4" style="width:100vmax; height: 20vmax;" playsinline autoplay loop muted></video>
 </div>

 <?php } ?> <!-- Fin php interdiction d'afficher video sur page commande  -->  

  <?php if ($_SERVER['REQUEST_URI'] == "/index.php") { ?>     <!-- Le php permet d'afficher la barre de recherche uniquement sur la page d'accueil qui est index.php --> 

    <!-- Mon onglet recherche -->

    <div class="barrerecherche">

      <form class="d-flex">

        <input class="form-control mr-sm-2" type="search" id="maRecherche" name="" placeholder="search" />

        <button type="submit" class="rounded-5" style="color: #4f48b1;">Recherche</button>

      </form> 

    </div>

  <?php } ?><!-- Fin php affichage barre de recherche uniquement sur index.php -->  

</div>
    </header>





































