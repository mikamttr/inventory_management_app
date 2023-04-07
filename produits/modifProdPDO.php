<?php
$idproduit = $_POST['idproduit'];
$reference = $_POST['reference'];
$nom = $_POST['nom'];
$idfournisseur = $_POST['idfournisseur'];
$quantite = $_POST['quantite'];
$commentaire = $_POST['commentaire'];

// préparation requête SQL
$requete = $connexion->prepare("UPDATE produits SET idproduit=?, reference=?, nom=?, idFournisseur=?, 
quantite=?, commentaire=? WHERE idproduit=?");

$requete->bindParam(1, $idproduit, PDO::PARAM_INT);
$requete->bindParam(2, $reference, PDO::PARAM_STR);
$requete->bindParam(3, $nom, PDO::PARAM_STR);
$requete->bindParam(4, $idfournisseur, PDO::PARAM_INT);
$requete->bindParam(5, $quantite, PDO::PARAM_INT);
$requete->bindParam(6, $commentaire, PDO::PARAM_STR);
$requete->bindParam(7, $idproduit, PDO::PARAM_INT);

// exécution requête
$resultat = $requete->execute();

// test résultat
if ($resultat) {
    $message = '<div class="alert alert-success" role="alert">
            Modification produit prise en compte<br>Nombre de ligne(s) traitée(s): ' . $resultat . '</div>';
} else {
    $message = "Erreur lors de la mise à jour";
}
echo $message;
?>

<a class="btn btn-primary" href="index.php">Retour au menu</a>