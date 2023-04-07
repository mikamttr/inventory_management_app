<?php
$id = $_GET['id'];
$requete = $connexion->prepare("SELECT * FROM `produits` WHERE idproduit = :id");
$result = $requete->execute(array(':id' => $id));
if ($result) {
    $fetchdata = $requete->fetch(PDO::FETCH_OBJ);
}
?>

<form name="FormAjout" action="index.php?page=modifProdPDO" method="post">
    <h2>Modification fiche produit</h2>
    <div class="form-group my-3">
        <label for="idproduit">ID Produit</label>
        <input class="form-control" type="text" id="idproduit" value="<?php echo $id; ?>" name="idproduit" readonly />
    </div>
    <div class="row mb-3">
        <div class="col">
            <label for="reference">Référence</label>
            <input class="form-control" type="text" id="reference" value="<?php echo $fetchdata->reference; ?>" name="reference" maxlength="5">
        </div>
        <div class="col">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" id="nom" value="<?php echo $fetchdata->nom; ?>" name="nom">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label for="idfournisseur">ID Fournisseur</label>
            <select class="form-select" name="idfournisseur" id="idfournisseur">
                <?php
                echo '<option selected="selected">' . $fetchdata->idFournisseur . '</option>'; // Idfournisseur actuel produit
                $requete = $connexion->prepare("SELECT * FROM fournisseurs");
                $result = $requete->execute();
                if ($result) {
                    $elements = $requete->fetchAll(PDO::FETCH_ASSOC);
                }
                foreach ($elements as $data) {
                    $value = $data['idFournisseur'];
                    echo "<option value='" . $value . "'>" . $value . " - " . $data['societe'] . "</option>";
                }
                ?>
            </select>
        </div>
        <div class="col">
            <label for="quantite">Quantité</label>
            <input type="number" class="form-control" id="quantite" value="<?php echo $fetchdata->quantite; ?>" name="quantite">
        </div>
    </div>
    <div class="form-group mb-4">
        <label for="commentaire">Commentaire</label>
        <input type="text" class="form-control" id="commentaire" col value="<?php echo $fetchdata->commentaire; ?>" name="commentaire" maxlength="45">
    </div>
    <div class="d-flex justify-content-end gap-3">
        <button class="btn btn-success px-5">Valider</button>
        <a href="index.php" class="btn btn-danger px-5">Retour</a>
    </div>
</form>