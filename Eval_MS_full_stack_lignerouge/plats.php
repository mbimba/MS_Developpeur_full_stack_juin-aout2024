   <!--       ICI MA PAGE TOUS LES PLATS: Avec tous les plats    -->


   <body style="background-color: #4A394a;">

<!--        Header     -->
<?php
require_once ("php/header.php");
require_once("database.php");
$plats = getPlats();
?>   


<div class="image-container position-relative"> <!--        ICI MON MA VIDEO DE FOND SANS L'ONGLET DE RECHERCHE    -->
        <div class="row g-0"> <!--Ici mon image de fond -->
          <video id="video" class="col-12" src="images_the_district/11659-231758756_small.mp4"
            style="width:100vmax; height: 20vmax;" playsinline autoplay loop muted></video>
        </div>   
</div>

 <!--            ******************************  CAROUSEL AVEC 32 IMAGES DE TOUTES LES CATEGORIES ********************************************************    -->

  <!-- DEBUT CAROUSSEL TOUS LES 12 PLATS -->
<main>
<div id="carouselExample" class="carousel slide text-center" data-bs-ride="carousel" style="background-color: #4A394a;">
<div class="carousel-inner">

<?php 
// Boucle pour afficher chaque plat
foreach($plats as $key => $plat) : 
  if($key % 4 === 0) :
?>
    <div class="carousel-item <?php echo $key === 0 ? 'active' : ''; ?>">
    <div class="card-group"> <!-- ****************** 1ER CAROUSEL AVEC 4 IMAGES ************************* -->
    <div class="col-12 mx-auto p-2 "> <h1 class="h5couleurcat">TOUS LES PLATS</h1></div>
<?php endif; ?>

    <!-- Ajouter des cartes ici selon besoin -->
    <div class="img-fluid col-sm-3 p-3 bg-dark text-white">
    <img class="rounded-circle mx-auto d-block" src="Mesimages/<?= $plat['image']; ?>" alt="...">
    <div class="card-body">
    <h5 class="card-title tailletitreplat"><?php echo $plat['libelle']; ?></h5>
    <p class="card-text tailledescriplat"><?php echo $plat['description']; ?></p>
    <a href="commande.php?id=<?php echo $plat['id']; ?>" class="btn btn-primary tailletextcommand">Commander</a>
    </div>
    </div>
<?php if(($key+1) % 4 === 0 || $key === count($plats)-1) : ?>
    </div>
    </div>
<?php endif; ?>

<?php endforeach; ?>


<!-- Fermeture des deux balises de mon carousel-item-->
</div>
</div>


<!-- ************************************************************************** -->

<!-- Ajouter d'autres items pour le carrousel ici -->
<!--ICI Mes boutons de carousel -->
<div class="carousel-controls">
<button class="carousel-control-prev" id="carouselcatprec" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
Précédent
</button>
<button class="carousel-control-next" id="carouselcatsuiv" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
Suivant
</button>
</div>
</main>










    <!--         ICI MON FOOTER OU PIED DE PAGE AVEC LES LOGOS    -->
<?php
require_once ('php/footer.php');
?>
    
