<!-- Ici le DAO: qui regroupe toutes mes fonctions -->


<?php

// Fonction pour récupérer les catégories de la base de données
function get_categories($conn, $limit = null, $offset = null) {
    // Requête SQL pour sélectionner toutes les catégories
    $sql = "SELECT * FROM categorie";
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

// Fonction pour récupérer les plats associés à la catégorie: PIZZAS
function get_plats_pizzas($conn) {
    // Requête SQL pour sélectionner les plats de la catégorie "PIZZAS"
    $sql = "SELECT p.* 
             FROM plat p 
             JOIN categorie c ON p.id_categorie = c.id 
             WHERE c.libelle = 'PIZZAS'";
    
    // Préparer la requête
    $stmt = $conn->prepare($sql);
    
    // Exécuter la requête
    $stmt->execute();
    
    // Récupérer tous les résultats sous forme de tableau associatif
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}



/*                             *************************************************             */

// Fonction pour récupérer les plats associés à la catégorie: BURGER
function get_plats_burgers($conn) {
    // Requête SQL pour sélectionner les plats de la catégorie "BURGERS"
    $sql = "SELECT p.* 
             FROM plat p 
             JOIN categorie c ON p.id_categorie = c.id 
             WHERE c.libelle = 'BURGERS'";
    
    // Préparer la requête
    $stmt = $conn->prepare($sql);
    
    // Exécuter la requête
    $stmt->execute();
    
    // Récupérer tous les résultats sous forme de tableau associatif
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}





/*                             *************************************************             */

// Fonction pour récupérer les plats associés à la catégorie: WRAPS
function get_plats_wraps($conn) {
    // Requête SQL pour sélectionner les plats de la catégorie "WRAPS"
    $sql = "SELECT p.* 
             FROM plat p 
             JOIN categorie c ON p.id_categorie = c.id 
             WHERE c.libelle = 'WRAPS'";
    
    // Préparer la requête
    $stmt = $conn->prepare($sql);
    
    // Exécuter la requête
    $stmt->execute();
    
    // Récupérer tous les résultats sous forme de tableau associatif
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}



/*                             *************************************************             */

// Fonction pour récupérer les plats associés à la catégorie: PASTA

function get_plats_pasta($conn) {
    // Requête SQL pour sélectionner les plats de la catégorie "PASTA"
    $sql = "SELECT p.* 
             FROM plat p 
             JOIN categorie c ON p.id_categorie = c.id 
             WHERE c.libelle = 'PASTA'";
    
    // Préparer la requête
    $stmt = $conn->prepare($sql);
    
    // Exécuter la requête
    $stmt->execute();
    
    // Récupérer tous les résultats sous forme de tableau associatif
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}




/*                             *************************************************             */

// Fonction pour récupérer les plats associés à la catégorie: SANDWICH

function get_plats_sandwich() {
    $sql = "SELECT * 
             FROM plat 
             WHERE id_categorie = (SELECT id 
                                   FROM categorie 
                                   WHERE libelle = 'SANDWICH')";
    
    // Exécuter la requête et retourner les résultats
    return $sql;
}




/*                             *************************************************             */

// Fonction pour récupérer les plats associés à la catégorie: ASIAN
function get_plats_asian($conn) {
    // Requête SQL pour sélectionner les plats de la catégorie "Asian"
    $sql = "SELECT p.* 
             FROM plat p 
             JOIN categorie c ON p.id_categorie = c.id 
             WHERE c.libelle = 'Asian'";
    
    // Préparer la requête
    $stmt = $conn->prepare($sql);
    
    // Exécuter la requête
    $stmt->execute();
    
    // Récupérer tous les résultats sous forme de tableau associatif
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}




?>