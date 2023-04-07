<?php
$id = $_POST['id'];
$societe = $_POST['societe'];
$adresse = $_POST['adresse'];
$cp = $_POST['cp'];
$ville = $_POST['ville'];
$commentaire = $_POST['commentaire'];

// préparation requête SQL
$requete = $connexion->prepare("UPDATE fournisseurs SET idFournisseur=?, societe=?, adresse=?, cp=?, 
ville=?, commentaire=? WHERE idFournisseur=?");

$requete->bindParam(1, $id, PDO::PARAM_INT);
$requete->bindParam(2, $societe, PDO::PARAM_STR);
$requete->bindParam(3, $adresse, PDO::PARAM_STR);
$requete->bindParam(4, $cp, PDO::PARAM_STR);
$requete->bindParam(5, $ville, PDO::PARAM_STR);
$requete->bindParam(6, $commentaire, PDO::PARAM_STR);
$requete->bindParam(7, $id, PDO::PARAM_INT);

// exécution requête
$resultat = $requete->execute();

// test
if ($resultat) {
    $message = '<div class="alert alert-success" role="alert">
    Modification fournisseur prise en compte<br>Nombre de ligne(s) traitée(s): ' . $resultat . '</div>';
} else {
    $message = "Erreur lors de la mise à jour";
}
echo $message;
?>

<a class="btn btn-primary" href="index.php">Retour au menu</a>