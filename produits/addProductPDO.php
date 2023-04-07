<?php
$idproduit = $_POST['idproduit'];
$reference = $_POST['reference'];
$nom = $_POST['nom'];
$idfournisseur = $_POST['idfournisseur'];
$quantite = $_POST['quantite'];
$commentaire = $_POST['commentaire'];

// préparation requête
$requete = $connexion->prepare("INSERT INTO produits (idproduit, reference, nom, idfournisseur, quantite, commentaire)
VALUES (:idproduit, :reference, :nom, :idfournisseur, :quantite, :commentaire)");

// execution requête
$resultat = $requete->execute(array(
    ':idproduit' => $idproduit,
    ':reference' => $reference,
    ':nom' => $nom,
    ':idfournisseur' => $idfournisseur,
    ':quantite' => $quantite,
    ':commentaire' => $commentaire
));

// test résultat
if ($resultat) {
    $message = '<div class="alert alert-success" role="alert">
            Produit ajouté avec succès<br>Nombre de ligne(s) traitée(s): ' . $resultat . '</div>';
} else {
    $message = "Erreur lors de l'insertion: enregistrement non ajouté";
}
echo $message;
?>

<a class="btn btn-primary" href="index.php">Retour au menu</a>