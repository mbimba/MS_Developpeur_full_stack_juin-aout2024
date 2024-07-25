<!-- ICI MA PAGE TOUS LES PLATS: Avec tous les plats -->


<?php

require_once ("php/header.php");

require_once("database.php");

$idCategorie = isset($_GET['id'])? $_GET['id'] : null;

$plats = getPlats($conn, $idCategorie);


// Vérifie si une catégorie est sélectionnée

if (isset($_GET['id'])) {

    // Cache les boutons précédent et suivant

    $hideButtons = true;

} else {

    $hideButtons = false;

}

if (isset($_GET['id'])) {

$categorie = getCategoryById($conn, $idCategorie);
}
?>


<!-- ************************************** MON BODY ***************************************************** -->


<main class="container-fluid mt-3 pt-5">

    <div class="row justify-content-center">

        <div class="col-md-8 col-lg-6">

            <h1 class="h5couleurcat text-center">LES PLATS: <?php echo $categorie['libelle'];?></h1>

        </div>

    </div>


    <!-- CAROUSEL AVEC 12 IMAGES DE TOUTES LES PLATS -->

    <div class="row justify-content-center">

        <div class="col-md-10 col-lg-8">

            <div id="carouselExample" class="carousel slide plats-container" data-bs-ride="carousel">

                <div class="carousel-inner">

                    <?php foreach($plats as $key => $plat) :?>

                        <?php if($key % 4 === 0) :?>

                            <div class="carousel-item <?php echo $key === 0? 'active' : '';?>">

                                <div class="card-group">

                        <?php endif;?>


                            <div class="col-sm-3 p-3 bg-dark text-white mx-auto">

                                <div class="d-flex justify-content-center align-items-center">

                                    <img class="rounded-circle mw-100 mh-100 mx-auto d-block" src="Mesimages/<?php echo $plat['image'];?>" alt="...">

                                </div>

                                <div class="card-body">

                                    <h5 class="card-title tailletitreplat"><?php echo $plat['libelle'];?></h5>

                                    <p class="card-text tailledescriplat"><?php echo $plat['description'];?></p>
                                  
                                    <p class="card-text tailledescriplat">Prix : <?php echo $plat['prix'];?> €</p>

                                    <a href="commande.php?id=<?php echo $plat['id'];?>" class="btn btn-primary tailletextcommand">Commander</a>

                                </div>

                            </div>


                        <?php if(($key+1) % 4 === 0 || $key === count($plats)-1) :?>

                                </div>

                            </div>

                        <?php endif;?>


                    <?php endforeach;?>

                </div>

        <!-- Boutons de carousel: j'y ai intégré du php pour masquer le bouton quand je clique sur une catégorie de plats de la page index.php -->
        <div class="carousel-controls moncarousselcat">
          <button class="carousel-control-prev moncarousselcatprev" id="carouselcatprec" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <?php if (!$hideButtons) { ?><button class="btn btn-secondary bg-dark rounded-4 col-sm-1 espacebouton" onclick="precedent()" type="button">Précédent</button>
          </button>
          <button class="carousel-control-next" id="carouselcatsuiv" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <button class="btn btn-secondary bg-dark rounded-4 col-sm-1 espacebouton" onclick="suivant()" type="button">Suivant</button><?php } ?>
          </button>
        </div>
      </div>
    </div>
  </div>
</main>

<!-- ICI MON FOOTER OU PIED DE PAGE AVEC LES LOGOS -->
<?php
require_once ('php/footer.php');?>



<!-- Ce script est fait pour masquer les boutons précédent et suivant quand je clique sur une catégorie de plats de la page index.php -->
<script>
  const hideButtons = <?php echo isset($_GET['id']) ? 'true' : 'false'; ?>;
  if (hideButtons) {
    document.querySelector('.prev').style.display = 'none';
    document.querySelector('.next').style.display = 'none';
  }
</script>