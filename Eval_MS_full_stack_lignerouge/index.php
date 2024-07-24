      <!--   ici ma page accueil     -->
           
<body style="background-color: #4A394a;">
    
      <!--     Header        SANS L'ONGLET DE RECHERCHE      -->
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
        $categories = get_categories($conn, 3);             //La fonction htmlspecialchars() en PHP est utilisée pour convertir les caractères spéciaux en entités HTML. Cela permet d'afficher du texte dans une page web sans que le texte soit interprété comme du code HTML.
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


     











