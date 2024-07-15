   <!--       ICI MA PAGE CATEGORIE: Avec les 8 Catégories de plats    -->


<body style="background-color: #4A394a;">

      <!--        Header     -->
<?php
require_once ("php/header.php");
require_once("database.php");
// Récupérer toutes les catégories depuis la base de données
$categories = getCategories();
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
      <?php foreach($categories as $key => $categorie) : ?>
        <?php if($key % 4 === 0) : ?>
          <div class="carousel-item <?php echo $key === 0 ? 'active' : ''; ?>">
            <div class="card-group"> <!-- ****************** 1ER CAROUSEL AVEC 4 IMAGES ************************* -->
              <div class="col-12 mx-auto p-2 "> <h1 class="h5couleurcat">TOUTES LES CATÉGORIES</h1></div>
              <?php for($i = 0; $i < 4; $i++) : ?>
                <?php if(isset($categories[$key + $i])) : ?>
                  <div class="img-fluid col-sm-3 p-3 bg-dark text-white">
                    <a href="platcategorie<?=strtolower($categories[$key + $i]['libelle']).'.php'?>">
                      <img class="rounded-circle mx-auto d-block" src="images_the_district/category/<?= $categories[$key + $i]['image']; ?>" alt="...">
                    </a>
                    <div class="card-body">
                      <h5 class="card-title"><?= $categories[$key + $i]['libelle']; ?></h5>
                    </div>
                  </div>
                <?php endif; ?>
              <?php endfor; ?>
            </div>
          </div>
        <?php endif; ?>
      <?php endforeach; ?>
    </div>

    <!-- ICI Mes boutons de carousel -->
    <div class="carousel-controls moncarousselcat">
      <button class="carousel-control-prev moncarousselcatprev" id="carouselcatprec" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <button class="btn btn-secondary bg-dark rounded-4 col-sm-1 espacebouton" onclick="precedent()" type="button">Précédent</button>
      </button>
      <button class="carousel-control-next" id="carouselcatsuiv" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <button class="btn btn-secondary bg-dark rounded-4 col-sm-1 espacebouton" onclick="suivant()" type="button">Suivant</button>
      </button>
    </div>

  </div>
</main>
<!-- FIN CAROUSSEL CATEGORIES -->



<!-- ICI MON FOOTER OU PIED DE PAGE AVEC LES LOGOS -->
<?php
require_once ('php/footer.php');
?>









