<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOUS LES PLATS V3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="Lignerouge.css" rel="stylesheet">
</head>



<body style="background-color: #4A394a;">

     <!--     Header        SANS L'ONGLET DE RECHERCHE      -->

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

    <!--            ******************************  CAROUSEL AVEC 32 IMAGES DE TOUTES LES CATEGORIES ********************************************************    -->

    <!--                      DEBUT CAROUSSEL CATEGORIES                     -->
    <main>
      
    <!-- <div id="carouselExampleControlsNotouching" class="container-fluid carousel slide text-center" style="background-color: #4A394a;" data-bs-touch="false"> -->
      <div id="carouselExample" class="carousel slide text-center" data-bs-ride="carousel" style="background-color: #4A394a;">
        <div class="carousel-inner">
          
            <div class="carousel-item active ">
           
                <div class="card-group">     <!--            ****************** 1ER CAROUSEL AVEC 4 IMAGES DE "PLATS ASIATIQUES"  *************************    -->
                    <div class="col-12 mx-auto p-2 "> <h1 class="h5couleurcat">TOUS LES PLATS</h1></div>
                    <!-- Ajouter des cartes ici selon besoin -->
                    <div class="img-fluid col-sm-3 p-3 bg-dark text-white  ">
                        <img class="rounded-circle mx-auto d-block " src="Mesimages/Asiannouillesviande.jpeg"  alt="...">
                        <div class="card-body">
                            <h5 class="card-title tailletitreplat">BOUILLON DE NOUILLES AU BOEUF</h5>
                            <p class="card-text tailledescriplat"><i>Nouilles, viandes, champignons avec du piment. </i></p> <!-- "i" permet de mettre le texte en italique -->
                            <a href="commande.php" class="btn btn-primary tailletextcommand">Commander</a>
                        </div>
                    </div>
                    <!-- Répéter pour 6 cartes ou plus selon besoin -->
                    <!-- Ajouter des cartes ici selon besoin -->
                    <div class="img-fluid col-sm-3 p-3 bg-dark text-white">
                        <img class="rounded-circle mx-auto d-block" src="Mesimages/Asiannems.jpeg" alt="...">
                        <div class="card-body">
                            <h5 class="card-title tailletitreplat">NEMS</h5>
                            <p class="card-text tailledescriplat"><i>Un pack de nems au poulet et des beignets de crevettes </i></p>
                            <a href="commande.php" class="btn btn-primary tailletextcommand">Commander</a>
                        </div>
                    </div>
                    <!-- Répéter pour 6 cartes ou plus selon besoin -->
                    <!-- Ajouter des cartes ici selon besoin -->
                    <div class="img-fluid col-sm-3 p-3 bg-dark text-white">
                        <img class="rounded-circle mx-auto d-block" src="Mesimages/AsianboeufsauteSanstitre.jpeg"  alt="...">
                        <div class="card-body">
                            <h5 class="card-title tailletitreplat">BOEUF SAUTÉ</h5>
                            <p class="card-text tailledescriplat"><i>Boeuf, poivrons et champignons </i></p>
                            <a href="commande.php" class="btn btn-primary tailletextcommand">Commander</a>
                        </div>
                    </div>
                    <!-- Répéter pour 6 cartes ou plus selon besoin -->
                    <!-- Ajouter des cartes ici selon besoin -->
                    <div class="img-fluid col-sm-3 p-3 bg-dark text-white">
                        <img class="rounded-circle mx-auto d-block" src="Mesimages/Asiansushi.jpeg"  alt="...">
                        <div class="card-body">
                            <h5 class="card-title tailletitreplat">SUSHIS</h5>
                            <p class="card-text tailledescriplat"><i>Riz, poisson, avocat... </i></p>
                            <a href="commande.php" class="btn btn-primary tailletextcommand">Commander</a>
                        </div>
                    </div>
                   
                    <!-- Répéter pour 6 cartes ou plus selon besoin -->
                </div>
            </div>
            <div class="carousel-item">     <!--            ****************** 2EME CAROUSEL AVEC 4 IMAGES DE "BURGERS"  *************************    -->
            <div class="card-group">  
                <div class="col-12 mx-auto p-2 "> <h1 class="h5couleurcat">TOUS LES PLATS</h1></div>    
                <!-- Ajouter des cartes ici selon besoin -->
                <div class="img-fluid col-sm-3 p-3 bg-dark text-white">
                    <img class="rounded-circle mx-auto d-block" src="Mesimages/bgbacon.jpg"  alt="...">
                    <div class="card-body">
                        <h5 class="card-title tailletitreplat">BURGER AU BACON</h5>
                        <p class="card-text tailledescriplat"><i>Avec du bacon croustillant, 1 steak haché 100% pour boeuf et 100% français. Accompagné de frites. </i></p>
                        <a href="commande.php" class="btn btn-primary tailletextcommand">Commander</a>
                    </div>
                </div>
                <!-- Répéter pour 6 cartes ou plus selon besoin -->
                <!-- Ajouter des cartes ici selon besoin -->
                <div class="img-fluid col-sm-3 p-3 bg-dark text-white">
                    <img class="rounded-circle mx-auto d-block" src="Mesimages/bgchicken.jpg"  alt="...">
                    <div class="card-body">
                        <h5 class="card-title tailletitreplat">BURGER CHICKEN</h5>
                        <p class="card-text tailledescriplat"><i>Chicken légèrement citronnée, et son croustillant inimitable il saura vous régaler </i></p>
                        <a href="commande.php" class="btn btn-primary tailletextcommand">Commander</a>
                    </div>
                </div>
                <!-- Répéter pour 6 cartes ou plus selon besoin -->
                <!-- Ajouter des cartes ici selon besoin -->
                <div class="img-fluid col-sm-3 p-3 bg-dark text-white ">
                    <img class="rounded-circle mx-auto d-block" src="Mesimages/bgnormand.jpg"   alt="...">
                    <div class="card-body">
                        <h5 class="card-title tailletitreplat">BURGER NORMAND</h5>
                        <p class="card-text tailledescriplat"><i>Des buns tartinés d'oignons caramélisés. Tout le réconfort du Camembert fondu sur la chair à saucisse de cochon.</i></p>
                        <a href="commande.php" class="btn btn-primary tailletextcommand">Commander</a>
                    </div>
                </div>
                <!-- Répéter pour 6 cartes ou plus selon besoin -->
                <!-- Ajouter des cartes ici selon besoin -->
                <div class="img-fluid col-sm-3 p-3 bg-dark text-white">
                    <img class="rounded-circle mx-auto d-block" src="Mesimages/bgtriplesteak.jpg"  alt="...">
                    <div class="card-body">
                        <h5 class="card-title tailletitreplat">BURGER BOEUF</h5>
                        <p class="card-text tailledescriplat"><i>Un steak haché 100%* pur bœuf et 100% français, ses oignons frais, sa salade, ses tomates, le tout réhaussé par sa sauce inimitable à la moutarde à l'ancienne.</i></p>
                        <a href="commande.php" class="btn btn-primary tailletextcommand">Commander</a>
                    </div>
                </div>
                
                <!-- Répéter pour 6 cartes ou plus selon besoin -->
            </div>
</div>

<div class="carousel-item">     <!--            ****************** 3EME CAROUSEL AVEC 4 IMAGES DE "GRILLADES"  *************************    -->
    <div class="card-group">   
        <div class="col-12 mx-auto p-2 "> <h1 class="h5couleurcat">TOUS LES PLATS</h1></div>   
        <!-- Ajouter des cartes ici selon besoin -->
        <div class="img-fluid col-sm-3 p-3 bg-dark text-white">
            <img class="rounded-circle mx-auto d-block" src="Mesimages/grilladeailedepouletetlegume.jpg"  alt="...">
            <div class="card-body">
                <h5 class="card-title tailletitreplat">AILES DE POULET</h5>
                <p class="card-text tailledescriplat"><i>Grillées au feu de bois </i></p>
                <a href="commande.php"class="btn btn-primary tailletextcommand">Commander</a>
            </div>
        </div>
        <!-- Répéter pour 6 cartes ou plus selon besoin -->
        <!-- Ajouter des cartes ici selon besoin -->
        <div class="img-fluid col-sm-3 p-3 bg-dark text-white">
            <img class="rounded-circle mx-auto d-block" src="Mesimages/grilladeeminceboeufcourgettesgrilles.jpg"  alt="...">
            <div class="card-body">
                <h5 class="card-title tailletitreplat">ÉMINCÉ DE BOEUF AUX COURGETTES GRILLÉES</h5>
                <p class="card-text tailledescriplat"><i>Du boeuf 100% français accompagné de courgettes de saison.</i></p>
                <a href="commande.php" class="btn btn-primary tailletextcommand">Commander</a>
            </div>
        </div>
        <!-- Répéter pour 6 cartes ou plus selon besoin -->
        <!-- Ajouter des cartes ici selon besoin -->
        <div class="img-fluid col-sm-3 p-3 bg-dark text-white">
            <img class="rounded-circle mx-auto d-block" src="Mesimages/grilladeribsfrite.jpg"  alt="...">
            <div class="card-body">
                <h5 class="card-title tailletitreplat">RIBS</h5>
                <p class="card-text tailledescriplat"><i>Grillés au feu de bois </i></p>
                <a href="Commande.php" class="btn btn-primary tailletextcommand">Commander</a>
            </div>
        </div>
        <!-- Répéter pour 6 cartes ou plus selon besoin -->
        <!-- Ajouter des cartes ici selon besoin -->
        <div class="img-fluid col-sm-3 p-3 bg-dark text-white">
            <img class="rounded-circle mx-auto d-block" src="Mesimages/grilladesteakfrite.jpg"  alt="...">
            <div class="card-body">
                <h5 class="card-title tailletitreplat">STEAK</h5>
                <p class="card-text tailledescriplat"><i>Grillés au feu de bois </i></p>
                <a href="commande.php" class="btn btn-primary tailletextcommand">Commander</a>
            </div>
        </div>
        
        <!-- Répéter pour 6 cartes ou plus selon besoin -->
    </div>
</div>

<div class="carousel-item">     <!--            ****************** 4EME CAROUSEL AVEC 4 IMAGES DE "PATES"  *************************    -->
    <div class="card-group">    
        <div class="col-12 mx-auto p-2 "> <h1 class="h5couleurcat">TOUS LES PLATS</h1></div>  
        <!-- Ajouter des cartes ici selon besoin -->
        <div class="img-fluid col-sm-3 p-3 bg-dark text-white">
            <img class="rounded-circle mx-auto d-block" src="Mesimages/patesboulettesboeuf.jpg"  alt="...">
            <div class="card-body">
                <h5 class="card-title tailletitreplat">PÂTES AUX BOULETTES DE BOEUF</h5>
                <p class="card-text tailledescriplat"><i>Pâtes maison </i></p>
                <a href="commande.php" class="btn btn-primary tailletextcommand">Commander</a>
            </div>
        </div>
        <!-- Répéter pour 6 cartes ou plus selon besoin -->
        <!-- Ajouter des cartes ici selon besoin -->
        <div class="img-fluid col-sm-3 p-3 bg-dark text-white">
            <img class="rounded-circle mx-auto d-block" src="Mesimages/patescarbonara.jpg"  alt="...">
            <div class="card-body">
                <h5 class="card-title tailletitreplat">PÂTES CARBONARA</h5>
                <p class="card-text tailledescriplat"><i>Pâtes maison avec une base de crème fraîche </i></p>
                <a href="commande.php" class="btn btn-primary tailletextcommand">Commander</a>
            </div>
        </div>
        <!-- Répéter pour 6 cartes ou plus selon besoin -->
        <!-- Ajouter des cartes ici selon besoin -->
        <div class="img-fluid col-sm-3 p-3 bg-dark text-white">
            <img class="rounded-circle mx-auto d-block" src="Mesimages/patessaumon.jpg"  alt="...">
            <div class="card-body">
                <h5 class="card-title tailletitreplat">PÂTES AU SAUMON</h5>
                <p class="card-text tailledescriplat"><i>Pâtes maison avec une base de crème fraîche </i></p>
                <a href="commande.php" class="btn btn-primary tailletextcommand">Commander</a>
            </div>
        </div>
        <!-- Répéter pour 6 cartes ou plus selon besoin -->
        <!-- Ajouter des cartes ici selon besoin -->
        <div class="img-fluid col-sm-3 p-3 bg-dark text-white">
            <img class="rounded-circle mx-auto d-block" src="Mesimages/patesepinards.jpg"  alt="...">
            <div class="card-body">
                <h5 class="card-title tailletitreplat">PÂTES AUX ÉPINARDS</h5>
                <p class="card-text tailledescriplat"><i>Pâtes maison avec des épinards frais</i></p>
                <a href="commande.php" class="btn btn-primary tailletextcommand">Commander</a>
            </div>
        </div>
        
        <!-- Répéter pour 6 cartes ou plus selon besoin -->
    </div>
</div>


<div class="carousel-item">     <!--            ****************** 5EME CAROUSEL AVEC 4 IMAGES DE "PIZZAS"  *************************    -->
    <div class="card-group">      
        <div class="col-12 mx-auto p-2 "> <h1 class="h5couleurcat">TOUS LES PLATS</h1></div>
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
            <img class="rounded-circle mx-auto d-block" src="Mesimages/pizzasorientale.jpg"  alt="...">
            <div class="card-body">
                <h5 class="card-title tailletitreplat">PIZZA ORIENTALE</h5>
                <p class="card-text tailledescriplat"><i>Base tomate, mozza, poivrons, oeuf dur, merguez, champignons </i></p>
                <a href="commande.php" class="btn btn-primary tailletextcommand">Commander</a>
            </div>
        </div>
        <!-- Répéter pour 6 cartes ou plus selon besoin -->
        <!-- Ajouter des cartes ici selon besoin -->
        <div class="img-fluid col-sm-3 p-3 bg-dark text-white">
            <img class="rounded-circle mx-auto d-block" src="Mesimages/pizzassaumon.jpg"  alt="...">
            <div class="card-body">
                <h5 class="card-title tailletitreplat">PIZZA AU SAUMON</h5>
                <p class="card-text tailledescriplat"><i>Base crème, saumon, tomates cerise, tomates confites, roquette, jus de citron, mozza, oignon </i></p>
                <a href="commande.php" class="btn btn-primary tailletextcommand">Commander</a>
            </div>
        </div>
        <!-- Répéter pour 6 cartes ou plus selon besoin -->
        <!-- Ajouter des cartes ici selon besoin -->
        <div class="img-fluid col-sm-3 p-3 bg-dark text-white">
            <img class="rounded-circle mx-auto d-block" src="Mesimages/pizzassavoyarde.jpg"  alt="...">
            <div class="card-body">
                <h5 class="card-title tailletitreplat">PIZZA SAVOYARDE</h5>
                <p class="card-text tailledescriplat"><i>Base tomate, mozza, pommes de terre, lardons. </i></p>
                <a href="commande.php" class="btn btn-primary tailletextcommand">Commander</a>
            </div>
        </div>
        
        <!-- Répéter pour 6 cartes ou plus selon besoin -->
    </div>
</div>

<div class="carousel-item">     <!--            ****************** 6EME CAROUSEL AVEC 4 IMAGES DE PLATS "SALADES"  *************************    -->
    <div class="card-group">    
        <div class="col-12 mx-auto p-2 "> <h1 class="h5couleurcat">TOUS LES PLATS</h1></div>  
        <!-- Ajouter des cartes ici selon besoin -->
        <div class="img-fluid col-sm-3 p-3 bg-dark text-white">
            <img class="rounded-circle mx-auto d-block" src="Mesimages/saladecarotte.jpg"  alt="...">
            <div class="card-body">
                <h5 class="card-title tailletitreplat">SALADE DE CAROTTES</h5>
                <p class="card-text tailledescriplat"><i>Carottes de la région </i></p>
                <a href="commande.php" class="btn btn-primary tailletextcommand">Commander</a>
            </div>
        </div>
        <!-- Répéter pour 6 cartes ou plus selon besoin -->
        <!-- Ajouter des cartes ici selon besoin -->
        <div class="img-fluid col-sm-3 p-3 bg-dark text-white">
            <img class="rounded-circle mx-auto d-block" src="Mesimages/saladeduchefcomposee.jpg"  alt="...">
            <div class="card-body">
                <h5 class="card-title tailletitreplat">SALADE DU CHEF</h5>
                <p class="card-text tailledescriplat"><i>Le secret du chef </i></p>
                <a href="commande.php" class="btn btn-primary tailletextcommand">Commander</a>
            </div>
        </div>
        <!-- Répéter pour 6 cartes ou plus selon besoin -->
        <!-- Ajouter des cartes ici selon besoin -->
        <div class="img-fluid col-sm-3 p-3 bg-dark text-white">
            <img class="rounded-circle mx-auto d-block" src="Mesimages/saladeniçoise.jpg"  alt="...">
            <div class="card-body">
                <h5 class="card-title tailletitreplat">SALADE NIÇOISE</h5>
                <p class="card-text tailledescriplat"><i>Spécialité niçoise adaptée selon les légumes de saison </i></p>
                <a href="commande.php" class="btn btn-primary tailletextcommand">Commander</a>
            </div>
        </div>
        <!-- Répéter pour 6 cartes ou plus selon besoin -->
        <!-- Ajouter des cartes ici selon besoin -->
        <div class="img-fluid col-sm-3 p-3 bg-dark text-white">
            <img class="rounded-circle mx-auto d-block" src="Mesimages/saladethoncru.jpg"  alt="...">
            <div class="card-body">
                <h5 class="card-title tailletitreplat">SALADE AU THON CRU</h5>
                <p class="card-text tailledescriplat"><i>Salon et son poisson selon son arrivage </i></p>
                <a href="commande.php" class="btn btn-primary tailletextcommand">Commander</a>
            </div>
        </div>
        
        <!-- Répéter pour 6 cartes ou plus selon besoin -->
    </div>
</div>


<div class="carousel-item">     <!--            ****************** 7EME CAROUSEL AVEC 4 IMAGES DE PLATS "SANDWICHS"  *************************    -->
    <div class="card-group"> 
        <div class="col-12 mx-auto p-2 "> <h1 class="h5couleurcat">TOUS LES PLATS</h1></div>     
          <!-- Ajouter des cartes ici selon besoin -->
          <div class="img-fluid col-sm-3 p-3 bg-dark text-white">
            <img class="rounded-circle mx-auto d-block" src="Mesimages/sandwichchicken.jpg"  alt="...">
            <div class="card-body">
                <h5 class="card-title tailletitreplat">SANDWICH CHICKEN</h5>
                <p class="card-text tailledescriplat"><i>Chicken et sauce moutarde </i></p>
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
            <img class="rounded-circle mx-auto d-block" src="Mesimages/sandwichpoulet.jpg"  alt="...">
            <div class="card-body">
                <h5 class="card-title tailletitreplat">SANDWICH POULET</h5>
                <p class="card-text tailledescriplat"><i>Emincé de poulet et sauce mayonnaise </i></p>
                <a href="commande.php" class="btn btn-primary tailletextcommand">Commander</a>
            </div>
        </div>
        <!-- Répéter pour 6 cartes ou plus selon besoin -->
        <!-- Ajouter des cartes ici selon besoin -->
        <div class="img-fluid col-sm-3 p-3 bg-dark text-white">
            <img class="rounded-circle mx-auto d-block" src="Mesimages/sandwichsalami.jpg"  alt="...">
            <div class="card-body">
                <h5 class="card-title tailletitreplat">SANDWICH SALAMI</h5>
                <p class="card-text tailledescriplat"><i>Du salami et du frommage </i></p>
                <a href="commande.php" class="btn btn-primary tailletextcommand">Commander</a>
            </div>
        </div>
        <!-- Répéter pour 6 cartes ou plus selon besoin -->
      
    </div>
</div>


<div class="carousel-item">     <!--            ****************** 8EME CAROUSEL AVEC 4 IMAGES DE PLATS "VEGAN"  *************************    -->
    <div class="card-group">    
        <div class="col-12 mx-auto p-2 "> <h1 class="h5couleurcat">TOUS LES PLATS</h1></div>  
          <!-- Ajouter des cartes ici selon besoin -->
          <div class="img-fluid col-sm-3 p-3 bg-dark text-white">
            <img class="rounded-circle mx-auto d-block" src="Mesimages/veganbouletteetriz.jpg"  alt="...">
            <div class="card-body">
                <h5 class="card-title tailletitreplat">BOULETTES DE LEGUMES</h5>
                <p class="card-text tailledescriplat"><i>Boulettes de pois chiche et pommes de terre accompagnée d'une sauce tomate </i></p>
                <a href="commande.php" class="btn btn-primary tailletextcommand">Commander</a>
            </div>
        </div>
        
        <!-- Répéter pour 6 cartes ou plus selon besoin -->
        <!-- Ajouter des cartes ici selon besoin -->
        <div class="img-fluid col-sm-3 p-3 bg-dark text-white">
            <img class="rounded-circle mx-auto d-block" src="Mesimages/vegantaboule.jpg"  alt="...">
            <div class="card-body">
                <h5 class="card-title tailletitreplat">TABOULÉ</h5>
                <p class="card-text tailledescriplat"><i>Avec du couscous et des légumes de saison </i></p>
                <a href="commande.php" class="btn btn-primary tailletextcommand">Commander</a>
            </div>
        </div>
        <!-- Répéter pour 6 cartes ou plus selon besoin -->
        <!-- Ajouter des cartes ici selon besoin -->
        <div class="img-fluid col-sm-3 p-3 bg-dark text-white">
            <img class="rounded-circle mx-auto d-block" src="Mesimages/veganburger.jpg"  alt="...">
            <div class="card-body">
                <h5 class="card-title tailletitreplat">BURGER</h5>
                <p class="card-text tailledescriplat"><i>Fait maison. A composer</i></p>
                <a href="commande.php" class="btn btn-primary tailletextcommand">Commander</a>
            </div>
        </div>
        <!-- Répéter pour 6 cartes ou plus selon besoin -->
        <!-- Ajouter des cartes ici selon besoin -->
        <div class="img-fluid col-sm-3 p-3 bg-dark text-white">
            <img class="rounded-circle mx-auto d-block" src="Mesimages/vegansaladepoischicheavocat.jpg"  alt="...">
            <div class="card-body">
                <h5 class="card-title tailletitreplat">SALADE DE POIS CHICHE</h5>
                <p class="card-text tailledescriplat"><i>Un mélange de pois chice et d'autres légumes de la région </i></p>
                <a href="commande.php" class="btn btn-primary tailletextcommand">Commander</a>
            </div>
        </div>
        <!-- Répéter pour 6 cartes ou plus selon besoin -->
      
    </div>
</div>











<!-- ************************************************************************** -->

<!-- Ajouter d'autres items pour le carrousel ici -->
</div>       <!--ICI Mes boutons de carousel -->
<button class="carousel-control-prev d-none" id="carouselcatprec" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<button class="btn btn-secondary bg-dark rounded-4 espacebouton" onclick="precedent()" type="button">Précédent</button>


<button class="carousel-control-next d-none" id="carouselcatsuiv" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<button class="btn btn-secondary bg-dark rounded-4 espacebouton" onclick="suivant()"  type="button">Suivant</button>


</div>
</main>

















<!--         ICI MON FOOTER OU PIED DE PAGE AVEC LES LOGOS    -->
<?php
require_once ('php/footer.php');
?>
    
 








<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
  crossorigin="anonymous"></script>
<script src="lignerouge.js"></script>
</body>

</html>