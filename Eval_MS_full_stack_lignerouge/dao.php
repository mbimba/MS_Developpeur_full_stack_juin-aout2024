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
function getPlats($conn, $idCategorie = null) {
    // Récupère les plats de la base de données
    $sql = "SELECT * FROM plat";
    if ($idCategorie !== null) {
      $sql .= " WHERE id_categorie = :idCategorie";
    }
    $stmt = $conn->prepare($sql);
    if ($idCategorie !== null) {
      $stmt->bindValue(':idCategorie', $idCategorie, PDO::PARAM_INT);
    }
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
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


  // Fonction pour récupérer une catégorie par son ID
  function getCategoryById($conn, $idCategorie) {   // Connexion entre page categorie.php et page plats.php
    // Requête SQL pour récupérer les informations de la catégorie sélectionnée
    $sql = "SELECT * FROM categorie WHERE id = :idCategorie";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':idCategorie', $idCategorie);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }


/*              POur le bouton commander de ma page plats.php et ma page commande        *************************************************             */

 // Fonction pour récupérer  les informations d'un platpar son ID
 function getPlatById($conn, $id) {
  $query = "SELECT * FROM plat WHERE id = :id";
  $stmt = $conn->prepare($query);
  $stmt->bindParam(":id", $id, PDO::PARAM_INT);
  $stmt->execute();
  return $stmt->fetch(PDO::FETCH_ASSOC);
}

/*                             *************************************************             */

// Fonction pour récupérer les plats associés à la catégorie: PASTA





/*                             *************************************************             */

// Fonction pour récupérer les plats associés à la catégorie: SANDWICH




/*                             *************************************************             */

// Fonction pour récupérer les plats associés à la catégorie: ASIAN




?>