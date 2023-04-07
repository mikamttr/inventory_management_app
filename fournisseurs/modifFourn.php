<?php
$id = $_GET['id'];
$requete = $connexion->prepare("SELECT * FROM `fournisseurs` WHERE idfournisseur = :id");
$result = $requete->execute(array(':id' => $id));
if ($result) {
    $fetchdata = $requete->fetch(PDO::FETCH_OBJ);
}
?>

<form name="FormAjout" action="index.php?page=modifFournPDO" method="post">
    <h2>Modification informations fournisseur</h2>
    <div class="form-group my-3">
        <label for="id">ID Fournisseur</label>
        <input type="text" class="form-control" id="id" value="<?php echo $id; ?>" name="id" readonly />
    </div>
    <div class="form-group mb-3">
        <label for="societe">Société</label>
        <input type="text" class="form-control" id="societe" value="<?php echo $fetchdata->societe; ?>" name="societe">
    </div>
    <div class="form-group mb-3">
        <label for="adresse">Adresse</label>
        <input type="text" class="form-control" id="adresse" value="<?php echo $fetchdata->adresse; ?>" name="adresse">
    </div>
    <div class="row mb-3">
        <div class="col">
            <label for="cp">Code postal</label>
            <input type="text" class="form-control" id="cp" value="<?php echo $fetchdata->cp; ?>" name="cp">
        </div>
        <div class="col">
            <label for="ville">Ville</label>
            <input type="text" class="form-control" id="ville" value="<?php echo $fetchdata->ville; ?>" name="ville">
        </div>
    </div>
    <div class="form-group mb-3">
        <label for="commentaire">Commentaire</label>
        <input type="text" class="form-control" id="commentaire" value="<?php echo $fetchdata->commentaire; ?>" name="commentaire" maxlength="45">
    </div>
    <div class="d-flex justify-content-end gap-3">
        <button class="btn btn-success px-5">Valider</button>
        <a href="index.php" class="btn btn-danger px-5">Retour</a>
    </div>
</form>