<?php
define('SERVER', "localhost");
define('USER', "root");
define('PASSWORD', "");
define('BASE', "exercicecefii");

try {
    $connexion = new PDO("mysql:host=" . SERVER . ";dbname=" . BASE, USER, PASSWORD);
} catch (Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}
