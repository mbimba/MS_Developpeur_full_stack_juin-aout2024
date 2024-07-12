   <!--       ICI MA PAGE TOUS LES PLATS: Avec tous les plats    -->


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

 <!--            ******************************  CAROUSEL AVEC 32 IMAGES DE TOUTES LES CATEGORIES ********************************************************    -->

    <!--                      DEBUT CAROUSSEL TOUS LES 12 PLATS                    -->
    <main>
      
<div id="carouselExample" class="carousel slide text-center" data-bs-ride="carousel" style="background-color: #4A394a;">
        <div class="carousel-inner">
          <div class="carousel-item active ">
           <div class="card-group">     <!--            ****************** 1ER CAROUSEL AVEC 4 IMAGES  *************************    -->
            <div class="col-12 mx-auto p-2 "> <h1 class="h5couleurcat">TOUS LES PLATS</h1></div>
                    <!-- Ajouter des cartes ici selon besoin -->
            <div class="img-fluid col-sm-3 p-3 bg-dark text-white">
            <img class="rounded-circle mx-auto d-block" src="Mesimages/pizzasorientale.jpg"  alt="...">
            <div class="card-body">
                <h5 class="card-title tailletitreplat">PIZZA BIANCA</h5>
                <p class="card-text tailledescriplat"><i> </i></p>
                <a href="commande.php" class="btn btn-primary tailletextcommand">Commander</a>
            </div>
            </div>
                       <!-- Répéter pour 6 cartes ou plus selon besoin -->
                         <!-- Ajouter des cartes ici selon besoin -->
            <div class="img-fluid col-sm-3 p-3 bg-dark text-white">
            <img class="rounded-circle mx-auto d-block" src="Mesimages/pizzasmargherita.jpg"  alt="...">
            <div class="card-body">
                <h5 class="card-title tailletitreplat">PIZZA MARGHERITA</h5>
                <p class="card-text tailledescriplat"><i>Base tomate, mozza fraîche, basilic, huile d'olive </i></p>
                <a href="commande.php" class="btn btn-primary tailletextcommand">Commander</a>
            </div>
            </div>
                       <!-- Répéter pour 6 cartes ou plus selon besoin -->
                         <!-- Ajouter des cartes ici selon besoin -->
            <div class="img-fluid col-sm-3 p-3 bg-dark text-white">
            <img class="rounded-circle mx-auto d-block" src="Mesimages/bgbacon.jpg"  alt="...">
            <div class="card-body">
                        <h5 class="card-title tailletitreplat">DISTRICT BURGER</h5>
                        <p class="card-text tailledescriplat"><i> </i></p>
                        <a href="commande.php" class="btn btn-primary tailletextcommand">Commander</a>
            </div>
            </div>
                <!-- Répéter pour 6 cartes ou plus selon besoin -->
                <!-- Ajouter des cartes ici selon besoin -->
            <div class="img-fluid col-sm-3 p-3 bg-dark text-white">
            <img class="rounded-circle mx-auto d-block" src="Mesimages/bgchicken.jpg"  alt="...">
            <div class="card-body">
                        <h5 class="card-title tailletitreplat">CHEESEBURGER</h5>
                        <p class="card-text tailledescriplat"><i></i></p>
                        <a href="commande.php" class="btn btn-primary tailletextcommand">Commander</a>
            </div>
            </div>
                   
                    <!-- Répéter pour 6 cartes ou plus selon besoin -->
            </div>
            </div>

        <div class="carousel-item">     <!--            ****************** 2EME CAROUSEL AVEC 4 IMAGES"  *************************    -->
        <div class="card-group">  
        <div class="col-12 mx-auto p-2 "> <h1 class="h5couleurcat">TOUS LES PLATS</h1></div>
                    <!-- Ajouter des cartes ici selon besoin -->
            <div class="img-fluid col-sm-3 p-3 bg-dark text-white">
            <img class="rounded-circle mx-auto d-block" src="Mesimages/AsianboeufsauteSanstitre.jpeg"  alt="...">
            <div class="card-body">
                            <h5 class="card-title tailletitreplat">BOEUF SAUTÉ</h5>
                            <p class="card-text tailledescriplat"><i></i></p>
                            <a href="commande.php" class="btn btn-primary tailletextcommand">Commander</a>
            </div>
            </div>
             <!-- Répéter pour 6 cartes ou plus selon besoin -->
                <!-- Ajouter des cartes ici selon besoin -->
            <div class="img-fluid col-sm-3 p-3 bg-dark text-white">
            <img class="rounded-circle mx-auto d-block" src="Mesimages/buffalo_wrap.jpeg"  alt="...">
            <div class="card-body">  
                        <h5 class="card-title tailletitreplat">BUFFALO CHICKEN WRAP</h5>
                        <p class="card-text tailledescriplat"><i></i></p>
                        <a href="commande.php" class="btn btn-primary tailletextcommand">Commander</a>
            </div>
            </div>
                    <!-- Répéter pour 6 cartes ou plus selon besoin -->
                  <!-- Ajouter des cartes ici selon besoin -->
            <div class="img-fluid col-sm-3 p-3 bg-dark text-white">
            <img class="rounded-circle mx-auto d-block" src="images_the_district/food/spaghetti-legumes.jpg"  alt="...">
            <div class="card-body">
                <h5 class="card-title tailletitreplat">SPAGHETTI AUX LÉGUMES</h5>
                <p class="card-text tailledescriplat"><i> </i></p>
                <a href="commande.php" class="btn btn-primary tailletextcommand">Commander</a>
            </div>
            </div>
             <!-- Répéter pour 6 cartes ou plus selon besoin -->
                  <!-- Ajouter des cartes ici selon besoin -->
                  <div class="img-fluid col-sm-3 p-3 bg-dark text-white">
            <img class="rounded-circle mx-auto d-block" src="images_the_district/food/lasagnes_viande.jpg"  alt="...">
            <div class="card-body">
                <h5 class="card-title tailletitreplat">LASAGNES</h5>
                <p class="card-text tailledescriplat"><i> </i></p>
                <a href="commande.php" class="btn btn-primary tailletextcommand">Commander</a>
            </div>
            </div>
                
                <!-- Répéter pour 6 cartes ou plus selon besoin -->
            </div>
            </div>


        <div class="carousel-item">     <!--            ****************** 3EME CAROUSEL AVEC 4 IMAGES DE "PATES"  *************************    -->
        <div class="card-group">    
        <div class="col-12 mx-auto p-2 "> <h1 class="h5couleurcat">TOUS LES PLATS</h1></div>  
        <!-- Ajouter des cartes ici selon besoin -->
            <div class="img-fluid col-sm-3 p-3 bg-dark text-white">
            <img class="rounded-circle mx-auto d-block" src="Mesimages/tagliatelles_saumon.jpeg"  alt="...">
            <div class="card-body">
                <h5 class="card-title tailletitreplat">TAGLIATELLES AU SAUMON</h5>
                <p class="card-text tailledescriplat"><i> </i></p>
                <a href="commande.php" class="btn btn-primary tailletextcommand">Commander</a>
            </div>
            </div>
        <!-- Répéter pour 6 cartes ou plus selon besoin -->
        <!-- Ajouter des cartes ici selon besoin -->
        <div class="img-fluid col-sm-3 p-3 bg-dark text-white">
        <img class="rounded-circle mx-auto d-block" src="Mesimages/sandwichjambon.jpg"  alt="...">
        <div class="card-body">
                <h5 class="card-title tailletitreplat">SANDWICH JAMBON</h5>
                <p class="card-text tailledescriplat"><i>Du jambon avec du beurre et de l'emmental</i></p>
                <a href="commande.php" class="btn btn-primary tailletextcommand">Commander</a>
        </div>
        </div>

  <!-- Répéter pour 6 cartes ou plus selon besoin -->
        <!-- Ajouter des cartes ici selon besoin -->
        <div class="img-fluid col-sm-3 p-3 bg-dark text-white">
        <img class="rounded-circle mx-auto d-block" src="Mesimages/saladeniçoise.jpg"  alt="...">
        <div class="card-body">
                <h5 class="card-title tailletitreplat">SALADE CÉSAR</h5>
                <p class="card-text tailledescriplat"><i> </i></p>
                <a href="commande.php" class="btn btn-primary tailletextcommand">Commander</a>
        </div>
        </div>
             <!-- Répéter pour 6 cartes ou plus selon besoin -->
        <!-- Ajouter des cartes ici selon besoin -->
        <div class="img-fluid col-sm-3 p-3 bg-dark text-white">
        <img class="rounded-circle mx-auto d-block" src="images_the_district/food/courgettes_farcies.jpg"  alt="...">
        <div class="card-body">
                <h5 class="card-title tailletitreplat">COURGETTES FARCIES</h5>
                <p class="card-text tailledescriplat"><i></i></p>
                <a href="commande.php" class="btn btn-primary tailletextcommand">Commander</a>
        </div>
        </div>
   
        <!-- Répéter pour 6 cartes ou plus selon besoin -->

        </div>
        </div>
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
    
