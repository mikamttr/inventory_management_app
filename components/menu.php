<!-- Onglets de navigation -->
<ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" data-bs-toggle="pill" href="#produits">Produits</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="pill" href="#fournisseurs">Fournisseurs</a>
    </li>
</ul>

<div class="tab-content">

    <!-- Onglet produits -->
    <div id="produits" class="container tab-pane active"><br>

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Liste des produits</h2>

            <a class="btn btn-outline-primary px-4" href="index.php?page=addProduct">
                <i class="bi bi-plus-lg"></i>
                Ajout produit
            </a>
        </div>

        <table class="table table-hover" id="tabProduits">
            <thead>
                <tr>
                    <th>ID produit</th>
                    <th>Référence</th>
                    <th>Nom</th>
                    <th>Fournisseur</th>
                    <th>Quantité</th>
                    <th data-orderable="false">Commentaire</th>
                    <th data-orderable="false"></th>
                    <th data-orderable="false"></th>
                </tr>
            </thead>

            <tbody>
                <?php
                $requete = $connexion->prepare("SELECT p.*, f.societe FROM `produits` AS p INNER JOIN fournisseurs AS f ON f.idFournisseur = p.idFournisseur;");
                $result = $requete->execute();
                if ($result) {
                    $fetchdata = $requete->fetchAll(PDO::FETCH_OBJ);
                }
                foreach ($fetchdata as $data) {
                    echo "<tr>";
                    echo "<td>" . $data->idproduit . "</td>";
                    echo "<td>" . $data->reference . "</td>";
                    echo "<td>" . $data->nom . "</td>";
                    echo "<td>" . $data->idFournisseur . " - " . $data->societe . "</td>";
                    echo "<td>" . $data->quantite . "</td>";
                    echo "<td>" . $data->commentaire . "</td>";
                    // lien modification produit :
                    echo "<td>" .
                        "<a href='index.php?page=modifProd&id=$data->idproduit'><i class=\"bi bi-pencil-square\"></i></a></td>";
                    // lien suppression produit :
                    echo "<td>" .
                        "<a href='index.php?page=supprProd&id=$data->idproduit'><i class=\"bi bi-trash-fill text-danger\"></i></a></td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Onglet fournisseurs -->
    <div id="fournisseurs" class="container tab-pane fade"><br>

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Liste des fournisseurs</h2>

            <a class="btn btn-outline-primary px-4" href="index.php?page=addFourn">
                <i class="bi bi-plus-lg"></i>
                Ajout fournisseur
            </a>
        </div>

        <table class="table table-hover" id="tabFournisseurs">
            <thead>
                <tr>
                    <th>ID fournisseur</th>
                    <th>Société</th>
                    <th>Adresse</th>
                    <th>Code postal</th>
                    <th>Ville</th>
                    <th data-orderable="false">Commentaire</th>
                    <th data-orderable="false"></th>
                    <th data-orderable="false"></th>
                </tr>
            </thead>

            <tbody>
                <?php
                $requete = $connexion->prepare("SELECT * FROM fournisseurs");
                $result = $requete->execute();
                if ($result) {
                    $fetchdata = $requete->fetchAll(PDO::FETCH_OBJ);
                }
                foreach ($fetchdata as $data) {
                    echo "<tr>";
                    echo "<td>" . $data->idFournisseur . "</td>";
                    echo "<td>" . $data->societe . "</td>";
                    echo "<td>" . $data->adresse . "</td>";
                    echo "<td>" . $data->cp . "</td>";
                    echo "<td>" . $data->ville . "</td>";
                    echo "<td>" . $data->commentaire . "</td>";
                    // lien modification fournisseur :
                    echo "<td>" . "<a href='index.php?page=modifFourn&id=$data->idFournisseur'><i class=\"bi bi-pencil-square\"></i></a></td>";
                    // lien suppression fournisseur :
                    echo "<td>" . "<a href='index.php?page=supprFourn&id=$data->idFournisseur'><i class=\"bi bi-trash-fill text-danger\"></i></a></td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>