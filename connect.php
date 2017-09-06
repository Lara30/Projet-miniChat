<?php
// Connexion à la base de données
try {
    $bdd = new PDO('mysql:host=localhost;dbname=minichat','root','coda');
    $bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
    $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
}
catch(PDOException $e) {
    echo 'Connexion impossible';
}

