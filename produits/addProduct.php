<form class="d-flex flex-column gap-3 my-4" name="FormAjout" action="index.php?page=addProductPDO" method="post">
    <h3>Ajout produit</h3>
    <div class="d-flex gap-3">
        <input type="text" class="form-control" placeholder="ID produit" aria-label="idproduit" id="idproduit" name="idproduit" maxlength="11" required />
        <input type="text" class="form-control" placeholder="Référence" aria-label="reference" id="reference" name="reference" maxlength="5" required />
        <input type="text" class="form-control" placeholder="Nom" aria-label="nom" id="nom" name="nom" required />
        <select class="form-select" name="idfournisseur" id="idfournisseur" required>
            <option selected disabled>ID fournisseur</option>
            <?php
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
        <input type="number" class="form-control" placeholder="Quantité" aria-label="quantite" id="quantite" name="quantite" required />
    </div>
    <textarea class="form-control" name="commentaire" id="commentaire" placeholder="Commentaire" maxlength="45"></textarea>
    <div class="d-flex justify-content-end gap-3">
        <button class="btn btn-success px-5">Valider</button>
        <a href="index.php" class="btn btn-danger px-5">Retour</a>
    </div>
</form>