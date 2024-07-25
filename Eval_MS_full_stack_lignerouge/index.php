<!-- ici ma page accueil -->
<?php
// Inclusion des fichiers nécessaires
require_once 'database.php'; // Fichier pour la connexion à la base de données


$search_query = '';
$plats = [];
// Traitement de la recherche
if (isset($_GET['search_query'])) {
    $search_query = $_GET['search_query'];
    $plats = search_plats($conn, $search_query);
}

// Récupération des catégories et des plats les plus vendus
$categories = get_categories($conn, 6); // Récupère 6 catégories
$best_sellers = get_best_sellers($conn, 3); // Récupère les 3 plats les plus vendus
?>


<body style="background-color: #4A394a;">
    <!-- Header SANS L'ONGLET DE RECHERCHE-->
    <?php require_once("php/header.php"); ?>

    <div class="parallax">
        <main>
            <!-- Section des catégories -->
            <div class="container-fluid mt-3 pt-5 card text-center w-75 bg-dark">
                <h1 class="text-light" style="color: #EE82EE">NOS CATÉGORIES DE PLATS POPULAIRES</h1>
                <div class="row">
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

            <!-- Résultats de la recherche -->
            <?php if (!empty($plats)): ?>
                <div class="container mt-3">
                    <h2 class="text-light">Voici votre recherche: "<?php echo htmlspecialchars($search_query); ?>"</h2>
                    <div class="row">
                        <?php foreach ($plats as $plat): ?>
                            <div class="col-sm-4 p-3 bg-dark text-white">
                                <img class="rounded-2 mx-auto d-block border border-black-1" src="Mesimages/<?php echo htmlspecialchars($plat['image']); ?>" width="50%" height="80%" alt="">
                                <h3><?php echo htmlspecialchars($plat['libelle']); ?></h3>
                                <p><?php echo htmlspecialchars($plat['description']); ?></p>
                                <p>Prix: <?php echo htmlspecialchars($plat['prix']); ?> €</p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php elseif ($search_query !== ''): ?>
                <div class="container mt-3">
                    <h2>Aucun plat trouvé pour "<?php echo htmlspecialchars($search_query); ?>"</h2>
                </div>
            <?php endif; ?>

            <!-- Section des plats les plus vendus -->
            <div class="container-fluid mt-3 pt-5 card text-center w-75 bg-dark">
                <h1 class="text-light" style="color: #EE82EE">LES PLATS LES PLUS VENDUS</h1>
                <div class="row">
                    <?php foreach ($best_sellers as $plat): ?>
                        <div class="col-sm-4 p-3 bg-dark text-white">
                            <img class="rounded-2 mx-auto d-block border border-black-1" src="Mesimages/<?php echo htmlspecialchars($plat['image']); ?>" width="50%" height="80%" alt="">
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </main>
    </div>

    <!-- Footer -->
    <?php require_once('php/footer.php'); ?>
</body>
