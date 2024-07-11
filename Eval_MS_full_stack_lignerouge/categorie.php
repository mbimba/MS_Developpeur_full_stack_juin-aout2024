   <!--       ICI MA PAGE CATGORIE: Avec les Catégories de plats    -->


<body style="background-color: #4A394a;">

      <!--        Header     -->
<?php
require_once ("php/header.php");
require_once("database.php");
?>   



      <div class="image-container position-relative"> <!--        ICI MON MA VIDEO DE FOND SANS L'ONGLET DE RECHERCHE    -->
        <div class="row g-0"> <!--Ici mon image de fond -->
          <video id="video" class="col-12" src="images_the_district/11659-231758756_small.mp4"
            style="width:100vmax; height: 20vmax;" playsinline autoplay loop muted></video>
        </div>
      </div>

  <!--            ****************************** test  ********************************************************    -->

        <!-- DEBUT CAROUSSEL CATEGORIES -->
    <main>
        <div id="carouselExample" class="carousel slide text-center" data-bs-ride="carousel" style="background-color: #4A394a;">
            <div class="carousel-inner">
                <?php
                $categories = get_categories($conn);
                foreach ($categories as $categorie) {
                    echo '<div class="carousel-item">
                    <div class="card-group">
                        <div class="img-fluid col-sm-3 p-3 bg-dark text-white">
                            <a href="plats.php?id='. $categorie['id']. '">
                                <img class="rounded-circle mx-auto d-block" src="images_the_district/category/'. $categorie['image']. '" alt="...">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">'. $categorie['libelle']. '</h5>
                                <p class="card-text tailledescriplat"><i>'. $categorie['description']. '</i></p>
                            </div>
                        </div>
                    </div>
                </div>';
                }
               ?>
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































<!--         ICI MON FOOTER OU PIED DE PAGE AVEC LES LOGOS    -->
<?php
require_once ('php/footer.php');
?>
    













