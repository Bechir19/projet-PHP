<?php
// Récupérer les données du formulaire
$nomProduit = $_POST['nom'];
$prixProduit = $_POST['prix'];

// Vérifier si les données sont valides
if (!empty($nomProduit) && is_numeric($prixProduit)) {
    // Récupérer le panier actuel depuis la session (simulé ici avec une session PHP)
    session_start();
    $panier = $_SESSION['panier'] ?? [];

    // Ajouter le nouveau produit au panier
    $nouveauProduit = [
        'nom' => $nomProduit,
        'prix' => $prixProduit
    ];

    $panier[] = $nouveauProduit;

    // Mettre à jour le panier dans la session
    $_SESSION['panier'] = $panier;

    // Rediriger vers la page principale avec un message de succès
    header("Location: index.html?message=Produit%20ajouté%20au%20panier%20avec%20succès");
    exit();
} else {
    // Rediriger vers la page principale avec un message d'erreur si les données ne sont pas valides
    header("Location: index.html?message=Erreur%20:%20données%20invalides");
    
     exit();
}
?>