<?php

session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}


if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['product'])) {
    $productId = $_GET['product'];

    $productDetails = getProductDetailsFromDatabase($productId);

    if ($productDetails) {
        $_SESSION['cart'][] = $productDetails;

        addToCartDatabase($productDetails);

        echo "Produit ajouté au panier avec succès!";
    } else {
        echo "Erreur: Produit non trouvé dans la base de données!";
    }
} else {
    echo "Erreur: Requête invalide!";
}