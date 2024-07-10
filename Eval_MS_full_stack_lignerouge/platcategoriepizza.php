<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PLATS PIZZAS V3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="Lignerouge.css" rel="stylesheet">

<body style="background-color: #4A394a;">
  
      <!--        Header     -->
<?php
require_once ("php/header.php");
?>   



      <div class="image-container position-relative"> <!--        ICI MON MA VIDEO DE FOND SANS L'ONGLET DE RECHERCHE    -->
        <div class="row g-0"> <!--Ici mon image de fond -->
      
          <!-- <div class="image-container">   Ici mon image de fond 
                                                                            <img class="img-fluid " src="Mesimages/imagedefond2a.avif" height="auto" width="100%" position="relative">
                                                                          </div>-->
      
          <video id="video" class="col-12" src="images_the_district/11659-231758756_small.mp4"
            style="width:100vmax; height: 20vmax;" playsinline autoplay loop muted></video>
        </div>
      
        
      
      </div>


<main>
<br>
      <h1 class="text-center h5couleurcat">PIZZAS</h1><br>
      <div id="carouselExample" class="carousel slide text-center" data-bs-ride="carousel" style="background-color: #4A394a;">
        <div class="carousel-inner">
  <div class="container row d-flex  justify-content-evenly mx-auto p-2 " style="background-color: #4A394a;">  <!-- mx-auto p-2  permet de centrer le bloc de cards au centre de la page -->
  
    <div class="card mb-3 bg-primary col-6 rounded-5 border border-danger" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4 zoomimage2">
            <img src="Mesimages/pizzasmargherita.jpg" class="img-fluid rounded-pill" alt="...">
          </div>
          <div class="col-md-6">
            <div class="card-body">
              <h5 class="card-title tailletitreplat">PIZZA MARGHERITA</h5>
              <p class="card-text tailledescriplat" style="text-align:justify"><i>Base tomate, mozza fraîche, basilic, huile d'olive.</i></p>
              <a href="commande.php" class="btn btn-dark tailletextcommand">Commander</a>
            </div>
          </div>
    </div>
    </div>

          <div class="card mb-3 bg-secondary col-6 rounded-5 border border-danger" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4 zoomimage2">
                <img src="Mesimages/pizzasorientale.jpg" class="img-fluid rounded-pill " alt="...">
              </div>
              <div class="col-md-6">
                <div class="card-body">
                  <h5 class="card-title tailletitreplat">PIZZA ORIENTALE</h5>
                  <p class="card-text tailledescriplat" style="text-align:justify"><i>Base tomate, mozza, poivrons, oeuf dur, merguez, champignons.</i></p>
                  <a href="commande.php" class="btn btn-dark tailletextcommand">Commander</a>
                </div>
              </div>
            </div>
          </div>
       
          <div class="card mb-3 bg-secondary col-6 rounded-5 border border-danger" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4 zoomimage2">
                <img src="Mesimages/pizzassaumon.jpg" class="img-fluid rounded-pill" alt="...">
              </div>
              <div class="col-md-6">
                <div class="card-body">
                  <h5 class="card-title tailletitreplat">PIZZA AU SAUMON</h5>
                  <p class="card-text tailledescriplat" style="text-align:justify"><i>Base crème, saumon, tomates cerise, tomates confites, roquette, jus de citron, mozza, oignon.</i></p>
                  <a href="commande.php" class="btn btn-dark tailletextcommand">Commander</a>
                </div>
              </div>
            </div>
          </div>


          <div class="card mb-3 bg-primary col-6 rounded-5 border border-danger" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4 zoomimage2">
                <img src="Mesimages/pizzassavoyarde.jpg" class="img-fluid rounded-pill" alt="...">
              </div>
              <div class="col-md-6">
                <div class="card-body">
                  <h5 class="card-title tailletitreplat">PIZZA SAVOYARDE</h5>
                  <p class="card-text tailledescriplat" style="text-align:justify"><i>Base tomate, mozza, pommes de terre, lardons.</i></p>
                  <a href="commande.php" class="btn btn-dark tailletextcommand">Commander</a>
                </div>
              </div>
            </div>
          </div>
  </div>


</div>       


<!-- ICI Mes boutons précédent et suivant -->

<div class="container d-grid gap-2 d-md-block">
        <button class="btn btn-dark col-sm-1 rounded-5 border border-danger boutonsuivetprec" onclick="redirectToAnotherpate()" type="button"> Précédent</button>
        <button class="btn btn-dark col-sm-1 rounded-5 border border-danger boutonsuivetprec" onclick="redirectToAnothersalade()"type="button"> Suivant </button>
</div>

</div>
</main>




<!--         ICI MON FOOTER OU PIED DE PAGE AVEC LES LOGOS    -->
<?php
require_once ('php/footer.php');
?>
    
 



