<?php
// Affiche un mot de passe
require_once 'can-connect.php';
require_once 'bdd.php';

// Sélection du mot de passe correspondant à l'id
$pwd = $connexion->prepare('SELECT * FROM keywords WHERE id = :id');
$pwd->bindValue(':id', htmlentities($_GET['id']), PDO::PARAM_INT);
// Exécution de la requête
$pwd->execute();
// Récupère le résultat au forma tobjet
$resultat = $pwd->fetch(PDO::FETCH_OBJ);