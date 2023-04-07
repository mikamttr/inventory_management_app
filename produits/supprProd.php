<?php
$id = $_GET['id'];

// préparation requête
$requete = $connexion->prepare("DELETE FROM produits WHERE idproduit='$id'");

// execution requête
$resultat = $requete->execute();

// test résultat
if ($resultat) {
    $message = '<div class="alert alert-success" role="alert">
            Suppression produit confirmée <br>Nombre de ligne(s) traitée(s): ' . $resultat . '</div>';
} else {
    $message = "Erreur lors de la suppression";
}
echo $message;
?>

<a class="btn btn-primary" href="index.php">Retour au menu</a>