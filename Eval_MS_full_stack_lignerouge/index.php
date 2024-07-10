<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACCUEIL V3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="Lignerouge.css" rel="stylesheet">
    
  
  </head>
<body style="background-color: #4A394a;">
    
      <!--     Header        SANS L'ONGLET DE RECHERCHE      -->
  <?php
  require_once ("php/header.php");
  ?>

    <div class="parallax">       <!--         DEBUT PARALLAX    -->
      
     
      <div class="image-container position-relative"> <!--        ICI MA VIDEO DE FOND + L'ONGLET DE RECHERCHE    -->
        <div class="row g-0"> <!--Ici mon image de fond -->
      
          <!-- <div class="image-container">   Ici mon image de fond 
                                                                            <img class="img-fluid " src="Mesimages/imagedefond2a.avif" height="auto" width="100%" position="relative">
                                                                          </div>-->
      
          <video id="video" class="col-12" src="images_the_district/11659-231758756_small.mp4"
            style="width:100vmax; height: 20vmax;" playsinline autoplay loop muted></video>
        </div>
            <!--        Mon onglet recherche   -->
        <div class="barrerecherche">
          <form class="d-flex">
      
            <input class="form-control mr-sm-2" type="search" id="maRecherche" name="" placeholder="search" />
            <button class="rounded-5" style="color: #4f48b1;">Recherche</button>
      
          </form>   
     

    
        </div>
      
      </div>


       
 
   

<main>         <!--        ICI MA PAGE AVEC LES CATEGORIES     -->
 

<div class="container-fluid mt-3  pt-5 card text-center w-75 " style="background-color: #4A394a;">  <!--         ICI LES 3 PREMIERES CATÉGORIES DE PLATS SUR LA PAGE ACCUEIL     -->
  <div class="row ">        <!-- "w-75" pour centrer les cartes au milieu -->
    <div class="col-sm-4 p-3 bg-dark text-white zoomimage">
      <div class="img-fluid ">
        <h1>ASIATIQUE</h1>
        <a href="platcategorieasiatique.php">
          <img class="rounded-circle mx-auto d-block border border border-black-1" src="images_the_district/category/asian_food_cat2a.jpg" alt="">
        </a>
      </div>
    </div>

    <div class="col-sm-4 p-3 bg-secondary text-white zoomimage">
      <div class="img-fluid">
        <h1>BURGERS</h1>
        <a href="platcategorieburger.php">
          <img class="rounded-circle mx-auto d-block border border-black-1" src="images_the_district/category/burger_cat.jpg" alt="">
        </a>
      </div>
    </div>

    <div class="col-sm-4 p-3 bg-dark  text-white zoomimage">
      <div class="img-fluid ">
        <h1>PÂTES</h1>
        <a href="platcategoriepate.php">
          <img class="rounded-circle mx-auto d-block border border-black-1" src="images_the_district/category/pasta_cat.jpg" alt="">
        </a>
      </div>
    </div>

  </div>
</div>

<!--         ICI LES 3 AUTRES CATÉGORIES DE PLAT SUR LA PAGE ACCUEIL     -->

<div class="container-fluid mt-3  pt-5 card text-center  w-75 " style="background-color: #4A394a;">  <!--         ICI LES 3 AUTRES CATÉGORIES DE PLATS SUR LA PAGE ACCUEIL     -->
  <div class="row ">    <!-- "w-75" pour centrer les cartes au milieu -->
    <div class="col-sm-4 p-3 bg-secondary text-white ">
      <div class="img-fluid zoomimage">
        <h1>SANDWICHS</h1>
        <a href="platcategoriesandwich.php">
          <img class="rounded-circle mx-auto d-block border border-black-1" src="images_the_district/category/wrap_cat.jpg" alt="">
        </a>
      </div>
    </div>
    

    <div class="col-sm-4 p-3 bg-dark text-white zoomimage">
      <div class="img-fluid zoomimage">
        <h1>PIZZAS</h1>
        <a href="platcategoriepizza.php">
          <img class="rounded-circle mx-auto d-block border border-black-1" src="images_the_district/category/pizza_cat.jpg" alt="">
        </a>
      </div>
    </div>

    <div class="col-sm-4 p-3 bg-secondary text-white zoomimage">
      <div class="img-fluid zoomimage">
        <h1>SALADES</h1>
        <a href="platcategoriesalade.php">
          <img class="rounded-circle mx-auto d-block border border-black-1" src="images_the_district/category/salade_cat.jpg" alt="">
        </a>
      </div>
    </div>

  </div>
</div>




<!--         ICI LES 3 PLATS SUR LA PAGE ACCUEIL     -->

<div class="container-fluid mt-3  pt-5 card text-center w-75 img-fluid" style="background-color: #4A394a;">     <!-- "w-75" pour centrer les cartes au milieu -->
  <div class="row ">
    <div class="col-sm-4 p-3 bg-dark text-white">
        <img class="rounded-2 mx-auto d-block border border-black-1" src="images_the_district/food/cesar_salad.jpg" width="50%" height="80%" alt="">
    </div>

    <div class="col-sm-4 p-3 bg-dark text-white">
      <img class="rounded-2 mx-auto d-block border border-black-1" src="images_the_district/food/courgettes_farcies.jpg" width="50%" height="80%" alt="">
    </div>

    <div class="col-sm-4 p-3 bg-dark  text-white">
      <img class="rounded-2 mx-auto d-block border border-black-1" src="images_the_district/food/pizza-salmon.png" width="50%" height="80%" alt="">
    </div>

  </div>
</div>


</main>

</div>            <!--         FIN PARALLAX    -->





<!--         ICI MON FOOTER OU PIED DE PAGE AVEC LES LOGOS    -->
<?php
require_once ('php/footer.php');
?>
    


     












    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"></script>
  
