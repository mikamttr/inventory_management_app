<?php
// préparation requête
$idfournisseur = $_POST['idfournisseur'];
$societe = $_POST['societe'];
$adresse = $_POST['adresse'];
$cp = $_POST['cp'];
$ville = $_POST['ville'];
$commentaire = $_POST['commentaire'];

// préparation requête
$requete = $connexion->prepare("INSERT INTO fournisseurs (idfournisseur, societe, adresse, cp, ville, commentaire)
VALUES (:idfournisseur, :societe, :adresse, :cp, :ville, :commentaire)");

// execution requête
$resultat = $requete->execute(array(
    ':idfournisseur' => $idfournisseur,
    'societe' => $societe,
    ':adresse' => $adresse,
    ':cp' => $cp,
    ':ville' => $ville,
    ':commentaire' => $commentaire
));

// test résultat
if ($resultat) {
    $message = '<div class="alert alert-success" role="alert">
            Fournisseur ajouté avec succès<br>Nombre de ligne(s) traitée(s): ' . $resultat . '</div>';
} else {
    $message = "Erreur lors de l'insertion: enregistrement non ajouté";
}
echo $message;
?>

<a class="btn btn-primary" href="index.php">Retour au menu</a>