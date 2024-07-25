<!-- ici ma page accueil -->
<body style="background-color: #4A394a;">
<!-- Header SANS L'ONGLET DE RECHERCHE -->
<?php
require_once ("php/header.php");
require_once("database.php");
?>

<div class="parallax"> 

<main> 
<div class="container-fluid mt-3 pt-5 card text-center w-75 bg-dark" > 
<h1 class="" style="color:EE82EE">NOS CATÉGORIES DE PLATS POPULAIRES</h1>
<div class="row "> 
<?php
$categories = get_categories($conn, 3); //La fonction htmlspecialchars() en PHP est utilisée pour convertir les caractères spéciaux en entités HTML. Cela permet d'afficher du texte dans une page web sans que le texte soit interprété comme du code HTML.
foreach ($categories as $categorie) {
echo '<div class="col-sm-4 p-3 bg-dark text-white zoomimage">
<div class="img-fluid ">
<h2>' . htmlspecialchars($categorie['libelle']) . '</h2> 
<a href="plats.php?id=' . htmlspecialchars($categorie['id']) . '">
<img class="rounded-circle mx-auto d-block border border border-black-1" src="images_the_district/category/' . htmlspecialchars($categorie['image']) . '" alt="' . htmlspecialchars($categorie['libelle']) . '">
</a>
</div>
</div>';
}
?>
</div>
</div>

<!-- ICI LES 3 AUTRES CATÉGORIES DE PLAT SUR LA PAGE ACCUEIL -->
<div class="container-fluid mt-3 pt-5 card text-center w-75 bg-secondary " > 
<div class="row "> 
<?php
$categories = get_categories($conn, 3, 3);
foreach ($categories as $categorie) {
echo '<div class="col-sm-4 p-3 bg-secondary text-white zoomimage">
<div class="img-fluid ">
<h2>' . htmlspecialchars($categorie['libelle']) . '</h2>
<a href="plats.php?id=' . htmlspecialchars($categorie['id']) . '">
<img class="rounded-circle mx-auto d-block border border border-black-1" src="images_the_district/category/' . htmlspecialchars($categorie['image']) . '" alt="">
</a>
</div>
</div>';
}
?>
</div>
</div>

<!-- ICI LES 3 PLATS SUR LA PAGE ACCUEIL -->
<div class="container-fluid mt-3 pt-5 card text-center w-75 img-fluid bg-dark"> 
<div class="row ">
<h1 class="" style="color:EE82EE">LES PLATS LES PLUS VENDUS</h1>
<?php
$plats = get_best_sellers($conn, 3);
foreach ($plats as $plat) {
echo '<div class="col-sm-4 p-3 bg-dark text-white">
<img class="rounded-2 mx-auto d-block border border-black-1" src="Mesimages/' . htmlspecialchars($plat['image']) . '" width="50%" height="80%" alt="">
</div>';
}
?>
</div>
</div>

</main>

</div> 

</div> <!-- FIN PARALLAX -->

<!-- ICI MON FOOTER OU PIED DE PAGE AVEC LES LOGOS -->
<?php
require_once ('php/footer.php');
?> 


Voici ma page plats.php : 
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

<div class="col-sm-3 p-3 bg-dark text-white">

<div class="d-flex justify-content-center align-items-center">

<img class="rounded-circle mw-100 mh-100" src="Mesimages/<?php echo $plat['image'];?>" alt="...">

</div>

<div class="card-body">

<h5 class="card-title tailletitreplat"><?php echo $plat['libelle'];?></h5>

<p class="card-text tailledescriplat"><?php echo $plat['description'];?></p>
<p class="card-text tailledescriplat">Quantité :</p>
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