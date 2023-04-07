<?php
define("CONNECT", "connect.php");
define("HEADER", "components/header.html");
define("MENU", "components/menu.php");
define("FOOTER", "components/footer.html");

include CONNECT;
include HEADER;


if (isset($_GET['page'])) {
    switch ($_GET['page']) {
            // produits
        case 'addProduct':
            include('produits/addProduct.php');
            break;
        case 'addProductPDO':
            include('produits/addProductPDO.php');
            break;
        case 'modifProd':
            include('produits/modifProd.php');
            break;
        case 'modifProdPDO':
            include('produits/modifProdPDO.php');
            break;
        case 'supprProd':
            include('produits/supprProd.php');
            break;
            // fournisseurs
        case 'addFourn':
            include('fournisseurs/addFourn.php');
            break;
        case 'addFournPDO':
            include('fournisseurs/addFournPDO.php');
            break;
        case 'modifFourn':
            include('fournisseurs/modifFourn.php');
            break;
        case 'modifFournPDO':
            include('fournisseurs/modifFournPDO.php');
            break;
        case 'supprFourn':
            include('fournisseurs/supprFourn.php');
            break;
    }
} else {
    include(MENU);
}

include FOOTER;
