   <!--       ICI MA PAGE CATGORIE: Avec les Catégories de plats    -->


<body style="background-color: #4A394a;">

      <!--        Header     -->
<?php
require_once ("php/header.php");
require_once("database.php");
?>   



<div class="image-container position-relative"> <!-- ICI MON MA VIDEO DE FOND SANS L'ONGLET DE RECHERCHE -->
<div class="row g-0"> <!--Ici mon image de fond -->
<!-- <div class="image-container"> Ici mon image de fond 
<img class="img-fluid " src="Mesimages/imagedefond2a.avif" height="auto" width="100%" position="relative">
</div>-->
<video id="video" class="col-12" src="images_the_district/11659-231758756_small.mp4"
style="width:100vmax; height: 20vmax;" playsinline autoplay loop muted></video>
</div>
</div>


<!-- ****************************** 1ER CAROUSEL AVEC 4 IMAGES ******************************************************** -->

<!-- DEBUT CAROUSSEL CATEGORIES -->
<main>
<div id="carouselExample" class="carousel slide text-center" data-bs-ride="carousel" style="background-color: #4A394a;">
<div class="carousel-inner">
<div class="carousel-item active card-img-top"> <!-- 1ER CAROUSEL AVEC 4 IMAGES -->
<div class="card-group">
<!-- Ajouter des cartes ici selon besoin -->
<div class="img-fluid col-sm-3 p-3 bg-dark text-white">
<a href="platcategoriepizza.php">
<img class="rounded-circle mx-auto d-block" src="images_the_district/category/pizza_cat.jpg" alt="...">
</a>
<div class="card-body">
<h5 class="card-title">PIZZAS</h5>
<p class="card-text tailledescriplat"><i>Pâte fine maison.</i></p>
</div>
</div>
<!-- Répéter pour 6 cartes ou plus selon besoin -->
<!-- Ajouter des cartes ici selon besoin -->
<div class="img-fluid col-sm-3 p-3 bg-dark text-white">
<a href="platcategorieburger.php">
<img class="rounded-circle mx-auto d-block" src="images_the_district/category/burger_cat.jpg" alt="...">
</a>
<div class="card-body">
<h5 class="card-title">BURGERS</h5>
<p class="card-text tailledescriplat"><i>Différents burgers faits maison.</i></p>
</div>
</div>
<!-- Répéter pour 6 cartes ou plus selon besoin -->
<!-- Ajouter des cartes ici selon besoin -->
<div class="img-fluid col-sm-3 p-3 bg-dark text-white">
<a href="platcategoriesandwich.php">
<img class="rounded-circle mx-auto d-block" src="images_the_district/category/wrap_cat.jpg" alt="...">
</a>
<div class="card-body">
<h5 class="card-title">WRAPS</h5>
<p class="card-text tailledescriplat"><i>Wraps frais faits sur place.</i></p>
</div>
</div>
<!-- Répéter pour 6 cartes ou plus selon besoin -->
<!-- Ajouter des cartes ici selon besoin -->
<div class="img-fluid col-sm-3 p-3 bg-dark text-white">
<a href="platcategorieburger.php">
<img class="rounded-circle mx-auto d-block" src="images_the_district/category/asian_food_cat2a.jpg" alt="...">
</a>
<div class="card-body">
<h5 class="card-title">ASIAN</h5>
<p class="card-text tailledescriplat"><i>Plusieurs plats à volonté.</i></p>
</div>
</div>
</div>
</div>
<div class="carousel-item"> <!-- 2EME CAROUSEL AVEC 4 IMAGES -->
<div class="card-group">
<!-- Ajouter des cartes ici selon besoin -->
<div class="img-fluid col-sm-3 p-3 bg-dark text-white">
<a href="platcategoriepate.php">
<img class="rounded-circle mx-auto d-block" src="images_the_district/category/pasta_cat.jpg" alt="...">
</a>
<div class="card-body">
<h5 class="card-title">PÂTES</h5>
<p class="card-text tailledescriplat"><i>Des pâte italiennes.</i></p>
</div>
</div>
<!-- Répéter pour 6 cartes ou plus selon besoin -->
<!-- Ajouter des cartes ici selon besoin -->
<div class="img-fluid col-sm-3 p-3 bg-dark text-white">
<a href="platcategoriesandwich.php">
<img class="rounded-circle mx-auto d-block" src="images_the_district/category/wrap_cat.jpg" alt="...">
</a>
<div class="card-body">
<h5 class="card-title">SANDWICHS</h5>
<p class="card-text tailledescriplat"><i>Sandwichs frais composés sur place.</i></p>
</div>
</div>
<!-- Répéter pour 6 cartes ou plus selon besoin -->
<!-- Ajouter des cartes ici selon besoin -->
<div class="img-fluid col-sm-3 p-3 bg-dark text-white">
<a href="platcategoriesalade.php">
<img class="rounded-circle mx-auto d-block" src="images_the_district/category/salade_cat.jpg" alt="...">
</a>
<div class="card-body">
<h5 class="card-title">SALADES</h5>
<p class="card-text tailledescriplat"><i>Avec des légumes de la région.</i></p>
</div>
</div>
<!-- Répéter pour 6 cartes ou plus selon besoin -->
<!-- Ajouter des cartes ici selon besoin -->
<div class="img-fluid col-sm-3 p-3 bg-dark text-white">
<a href="platcategoriesalade.php">
<img class="rounded-circle mx-auto d-block" src="images_the_district/category/Vegan.jpg" alt="...">
</a>
<div class="card-body">
<h5 class="card-title">Veggie</h5>
<p class="card-text tailledescriplat"><i>Que du frais et du bio.</i></p>
</div>
</div>
</div>
</div>
</div>
<!-- ICI Mes boutons de carousel -->
<button class="carousel-control-prev d-none" id="carouselcatprec" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<button class="btn btn-secondary bg-dark rounded-4 col-sm-1 espacebouton" onclick="precedent()" type="button">Précédent</button>
<!-- col-sm-1 permet d'avoir des boutons d'une même largeur -->
</button>
<button class="carousel-control-next d-none" id="carouselcatsuiv" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<button class="btn btn-secondary bg-dark rounded-4 col-sm-1 espacebouton" onclick="suivant()" type="button">Suivant</button>
<!-- col-sm-1 permet d'avoir des boutons d'une même largeur -->
</button>
</div>
</main>
<!-- FIN CAROUSSEL CATEGORIES -->



<!-- ICI MON FOOTER OU PIED DE PAGE AVEC LES LOGOS -->
<?php
require_once ('php/footer.php');
?>









