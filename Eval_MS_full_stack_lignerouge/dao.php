<!-- Ici le DAO: qui regroupe toutes mes fonctions -->


<?php

// Fonction pour récupérer les catégories de la base de données
function get_categories($conn, $limit = null, $offset = null) {
    // Requête SQL pour sélectionner toutes les catégories
    $sql = "SELECT * FROM categorie where categorie.active = 'Yes'";
     // Si une limite est spécifiée, l'ajouter à la requête
    if ($limit !== null) {
        $sql .= " LIMIT $limit";
    }
     // Si un décalage est spécifié, l'ajouter à la requête
    if ($offset !== null) {
        $sql .= " OFFSET $offset";
    }
    // Préparer la requête
    $stmt = $conn->prepare($sql);
    // Exécuter la requête
    $stmt->execute();
    // Récupérer tous les résultats sous forme de tableau associatif
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

/*                             *************************************************             */

// Fonction pour récupérer les plats les plus vendus de la base de données
function get_best_sellers($conn, $limit) {
    // Requête SQL pour sélectionner les images des plats les plus vendus
    $sql = "SELECT p.image FROM plat p JOIN commande c ON p.id = c.id_plat GROUP BY p.id ORDER BY COUNT(c.id) DESC LIMIT $limit";
   // Préparer la requête
    $stmt = $conn->prepare($sql);
    // Exécuter la requête
    $stmt->execute();
    // Récupérer tous les résultats sous forme de tableau associatif
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

/*                             *************************************************             */

function get_plats_by_categorie($conn, $categorie_id) {
    $sql = "SELECT * FROM plat WHERE id_categorie = :categorie_id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':categorie_id', $categorie_id);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}



/*                             ******************* RECUP LES PLATS: Page plat.php  ******************************             */
function getPlats() {
    global $conn;
    $query = "SELECT * FROM plat";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $plats = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $plats;
  }



/*                             ********************** RECUP LES CATÉGORIES: Page categorie.php  ***************************             */


// Fonction pour récupérer toutes les catégories de la base de données
function getCategories(){
    global $conn; // accès à la base de données globale
    $sql = "SELECT * FROM categorie";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }


/*                             *************************************************             */




/*                             *************************************************             */

// Fonction pour récupérer les plats associés à la catégorie: PASTA





/*                             *************************************************             */

// Fonction pour récupérer les plats associés à la catégorie: SANDWICH




/*                             *************************************************             */

// Fonction pour récupérer les plats associés à la catégorie: ASIAN




?>