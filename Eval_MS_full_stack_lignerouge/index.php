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
    // Ne pas récupérer les catégories et les plats les plus vendus si une recherche est effectuée
    $show_categories = false;
    $show_best_sellers = false;
} else {
    // Récupération des catégories et des plats les plus vendus si aucune recherche n'est effectuée
    $categories_first_set = get_categories($conn, 3); // Récupère les 3 premières catégories
    $categories_second_set = get_categories($conn, 3, 3); // Récupère les 3 suivantes
    $best_sellers = get_best_sellers($conn, 3); // Récupère les 3 plats les plus vendus
    $show_categories = true;
    $show_best_sellers = true;
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
            <!-- Résultats de la recherche -->
            <?php if (!empty($plats)): ?>
                <div class="container mt-3">
                    <h2 class="text-light">Voici votre plat : "<?php echo htmlspecialchars($search_query); ?>"</h2>
                    <div class="row justify-content-center">
                        <?php foreach ($plats as $plat): ?>
                            <div class="col-md-3 p-3 bg-dark text-white">
                                <div class="d-flex justify-content-center align-items-center">
                                    <img class="rounded-circle mw-100 mh-100" src="Mesimages/<?php echo htmlspecialchars($plat['image']); ?>" alt="Image de <?php echo htmlspecialchars($plat['libelle']); ?>">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo htmlspecialchars($plat['libelle']); ?></h5>
                                    <p class="card-text"><?php echo htmlspecialchars($plat['description']); ?></p>
                                    <p class="card-text">Prix : <?php echo htmlspecialchars($plat['prix']); ?> €</p>
                                    <!-- Bouton Commander -->
                                    <a href="commande.php?id=<?php echo htmlspecialchars($plat['id']); ?>" class="btn btn-primary">Commander</a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php elseif ($search_query !== ''): ?>
                <div class="container mt-3">
                    <h2>Aucun plat trouvé pour "<?php echo htmlspecialchars($search_query); ?>"</h2>
                </div>
            <?php endif; ?>

            <!-- Section des catégories (affichée uniquement si aucune recherche n'est effectuée) -->
            <?php if ($show_categories): ?>
                <div class="container-fluid mt-3 pt-5 card text-center w-75 bg-dark">
                    <h1 class="text" style="color: #EE82EE">NOS CATÉGORIES DE PLATS POPULAIRES</h1>
                    <div class="row">
                        <?php foreach ($categories_first_set as $categorie): ?>
                            <div class="col-sm-4 p-3 bg-dark text-white zoomimage">
                                <div class="img-fluid">
                                    <h2><?php echo htmlspecialchars($categorie['libelle']); ?></h2>
                                    <a href="plats.php?id=<?php echo htmlspecialchars($categorie['id']); ?>">
                                        <img class="rounded-circle mx-auto d-block border border-black-1" src="images_the_district/category/<?php echo htmlspecialchars($categorie['image']); ?>" alt="<?php echo htmlspecialchars($categorie['libelle']); ?>">
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- ICI LES 3 AUTRES CATÉGORIES DE PLAT SUR LA PAGE ACCUEIL -->
                <div class="container-fluid mt-3 pt-5 card text-center w-75 bg-secondary">
                    <div class="row">
                        <?php foreach ($categories_second_set as $categorie): ?>
                            <div class="col-sm-4 p-3 bg-secondary text-white zoomimage">
                                <div class="img-fluid">
                                    <h2><?php echo htmlspecialchars($categorie['libelle']); ?></h2>
                                    <a href="plats.php?id=<?php echo htmlspecialchars($categorie['id']); ?>">
                                        <img class="rounded-circle mx-auto d-block border border-black-1" src="images_the_district/category/<?php echo htmlspecialchars($categorie['image']); ?>" alt="<?php echo htmlspecialchars($categorie['libelle']); ?>">
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>

            <!-- Section des plats les plus vendus (affichée uniquement si aucune recherche n'est effectuée) -->
            <?php if ($show_best_sellers): ?>
                <div class="container-fluid mt-3 pt-5 card text-center w-75 bg-dark">
                    <h1 class="text" style="color: #EE82EE">LES PLATS LES PLUS VENDUS</h1>
                    <div class="row">
                        <?php foreach ($best_sellers as $plat): ?>
                            <div class="col-sm-4 p-3 bg-dark text-white">
                                <img class="rounded-2 mx-auto d-block border border-black-1" src="Mesimages/<?php echo htmlspecialchars($plat['image']); ?>" width="50%" height="80%" alt="Image de <?php echo htmlspecialchars($plat['libelle']); ?>">
                                <h3><?php echo htmlspecialchars($plat['libelle']); ?></h3>
                                <p><?php echo htmlspecialchars($plat['description']); ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>
        </main>
    </div>
    <!-- Footer -->
    <?php require_once('php/footer.php'); ?>
</body>
