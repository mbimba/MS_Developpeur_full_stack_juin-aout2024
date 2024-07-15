   <!--       ICI MA PAGE CATEGORIE: Avec les 8 Catégories de plats    -->


<body style="background-color: #4A394a;">

      <!--        Header     -->
      <?php
require_once ("php/header.php");
require_once("database.php");

// Récupérer toutes les catégories depuis la base de données
$categories = getCategories($conn);

?>

<body style="background-color: #4A394a;">
<!-- Header -->
<header class="position-relative">
    <div class="container-fluid">
        <div class="row g-0">
            <video id="video" class="col-12" src="images_the_district/11659-231758756_small.mp4" style="width:100vmax; height: 20vmax;" playsinline autoplay loop muted></video>
        </div>
    </div>
</header>

<main class="container-fluid mt-3 pt-5" >
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <h1 class="h5couleurcat text-center">TOUTES LES CATÉGORIES</h1>
        </div>
    </div>

    <!-- CAROUSEL AVEC 4 IMAGES DE TOUTES LES CATÉGORIES -->
    <div id="carouselExample" class="carousel slide categorie-container" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php foreach($categories as $key => $categorie) :?>
                <?php if($key % 4 === 0) :?>
                    <div class="carousel-item <?php echo $key === 0? 'active' : '';?>">
                        <div class="card-group">
                <?php endif;?>
                <div class="col-sm-3 p-3 bg-dark text-white">
                    <a href="plats.php?id=<?php echo $categorie['id'];?>">
                        <img class="rounded-circle mx-auto d-block" src="images_the_district/category/<?php echo $categorie['image'];?>" alt="...">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $categorie['libelle'];?></h5>
                    </div>
                </div>

                <?php if(($key+1) % 4 === 0 || $key === count($categories)-1) :?>
                        </div>
                    </div>
                <?php endif;?>

            <?php endforeach;?>
        </div>

        <!-- Boutons de carousel -->
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

<!-- ICI MON FOOTER OU PIED DE PAGE AVEC LES LOGOS -->
<?php
require_once ('php/footer.php');?>