<?php
// Pour appeler la fonction des plats d'une catégorie: PLATS PIZZAS
$plats_pizzas = get_plats_pizzas($conn);

foreach ($plats_pizzas as $plat) {
    echo $plat['libelle']. '<br>';
}

// Pour appeler la fonction des plats d'une catégorie: PLATS BURGERS

$plats_burgers = get_plats_burgers($conn);

foreach ($plats_burgers as $plat) {
    echo $plat['libelle']. '<br>';
}

// Pour appeler la fonction des plats d'une catégorie: PLATS WRAPS
$plats_wraps = get_plats_wraps($conn);

foreach ($plats_wraps as $plat) {
    echo $plat['libelle']. '<br>';
}

// Pour appeler la fonction des plats d'une catégorie: PLATS PASTA
$plats_pasta = get_plats_pasta($conn);

foreach ($plats_pasta as $plat) {
    echo $plat['libelle']. '<br>';
}

// Pour appeler la fonction des plats d'une catégorie: PLATS SANDWICH
$plats_sandwich = get_plats_sandwich();
foreach ($plats_sandwich as $plat) {
    echo $plat['libelle']. '<br>';
}

// Pour appeler la fonction des plats d'une catégorie: PLATS ASIAN


$plats_asian = get_plats_asian($conn);

foreach ($plats_asian as $plat) {
    echo $plat['libelle'] . '<br>';
}









?>