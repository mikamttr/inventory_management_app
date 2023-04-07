<form class="d-flex flex-column gap-3 my-4" name="FormAjout" action="index.php?page=addFournPDO" method="post">
    <h3>Ajout fournisseur</h3>
    <div class="d-flex gap-3">
        <input type="text" class="form-control" placeholder="ID fournisseur" aria-label="idfournisseur" id="idfournisseur" name="idfournisseur" maxlength="11" required />
        <input type="text" class="form-control" placeholder="Adresse" aria-label="adresse" id="adresse" name="adresse">
    </div>
    <div class="row">
        <div class="col">
            <input type="text" class="form-control" placeholder="Nom de la société" aria-label="societe" id="societe" name="societe" required />
        </div>
        <div class="col-3">
            <input type="text" class="form-control" placeholder="Code postal" aria-label="cp" id="cp" name="cp">
        </div>
        <div class="col-3">
            <input type="text" class="form-control" placeholder="Ville" aria-label="ville" id="ville" name="ville">
        </div>
    </div>
    <textarea class="form-control" name="commentaire" id="commentaire" placeholder="Commentaire" maxlength="45"></textarea>
    <div class="d-flex justify-content-end gap-3">
        <button class="btn btn-success px-5">Valider</button>
        <a href="index.php" class="btn btn-danger px-5">Retour</a>
    </div>
</form>