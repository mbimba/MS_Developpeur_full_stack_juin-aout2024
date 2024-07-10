      <!--   ici ma page accueil     -->
           
<body style="background-color: #4A394a;">
    
      <!--     Header        SANS L'ONGLET DE RECHERCHE      -->
  <?php
  require_once ("php/header.php");
  require_once("database.php");
  ?>

  



    <div class="parallax">       <!--         DEBUT PARALLAX    -->
      
     
      <div class="image-container position-relative"> <!--        ICI MA VIDEO DE FOND + L'ONGLET DE RECHERCHE    -->
        <div class="row g-0"> <!--Ici mon image de fond -->
      
          <video id="video" class="col-12" src="images_the_district/11659-231758756_small.mp4"
            style="width:100vmax; height: 20vmax;" playsinline autoplay loop muted></video>
        </div>
            <!--        Mon onglet recherche   -->
        <div class="barrerecherche">
          <form class="d-flex">
            <input class="form-control mr-sm-2" type="search" id="maRecherche" name="" placeholder="search" />
            <button type="submit" class="rounded-5" style="color: #4f48b1;">Recherche</button>
          </form>   
        </div>
      
      </div>


<!-- ... -->
   

<main>         <!--        ICI MA PAGE AVEC LES CATEGORIES     -->
 

<div class="container-fluid mt-3  pt-5 card text-center w-75 " style="background-color: #4A394a;">  <!--         ICI LES 3 PREMIERES CATÉGORIES DE PLATS SUR LA PAGE ACCUEIL     -->
  <div class="row ">        <!-- "w-75" pour centrer les cartes au milieu -->
  <?php
                        $categories = get_categories($conn, 3);
                        foreach ($categories as $categorie) {
                            echo '<div class="col-sm-4 p-3 bg-dark text-white zoomimage">
                                    <div class="img-fluid ">
                                        <h1>' . $categorie['libelle'] . '</h1>
                                        <a href="platcategorie.php?id=' . $categorie['id'] . '">
                                            <img class="rounded-circle mx-auto d-block border border border-black-1" src="images_the_district/category/' . $categorie['image'] . '" alt="'.$category['libelle'].'">
                                        </a>
                                    </div>
                                </div>';
                        }
                    ?>
      </div>
    </div>
  

<!--         ICI LES 3 AUTRES CATÉGORIES DE PLAT SUR LA PAGE ACCUEIL     -->

<div class="container-fluid mt-3 pt-5 card text-center w-75 " style="background-color: #4A394a;"> 
                <div class="row "> 
                    <?php
                        $categories = get_categories($conn, 3, 3);
                        foreach ($categories as $categorie) {
                            echo '<div class="col-sm-4 p-3 bg-secondary text-white zoomimage">
                                    <div class="img-fluid ">
                                        <h1>' . $categorie['libelle'] . '</h1>
                                        <a href="platcategorie.php?id=' . $categorie['id'] . '">
                                            <img class="rounded-circle mx-auto d-block border border border-black-1" src="images_the_district/category/' . $categorie['image'] . '" alt="">
                                        </a>
                                    </div>
                                </div>';
                        }
                    ?>
                </div>
            </div>



<!--         ICI LES 3 PLATS SUR LA PAGE ACCUEIL     -->

<div class="container-fluid mt-3 pt-5 card text-center w-75 img-fluid" style="background-color: #4A394a;"> 
                <div class="row ">
                    <?php
                        $plats = get_best_sellers($conn, 3);
                        foreach ($plats as $plat) {
                            echo '<div class="col-sm-4 p-3 bg-dark text-white">
                                    <img class="rounded-2 mx-auto d-block border border-black-1" src="images_the_district/food/' . $plat['image'] . '" width="50%" height="80%" alt="">
                                </div>';
                        }
                    ?>
                </div>
            </div>

        </main>

    </div> 




</div>            <!--         FIN PARALLAX    -->





<!--         ICI MON FOOTER OU PIED DE PAGE AVEC LES LOGOS    -->
<?php
require_once ('php/footer.php');
?>
    


     











