<?php
// Affiche un film
require_once 'can-connect.php';
require_once 'bdd.php';

// SELECTION DE TOUT LES FILMS
$film = $connexion->prepare('SELECT * FROM film WHERE id = :id');
$film->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
// EXECUTION DE LA REQUETE
$film->execute();
// RECUPERE LE RESULTAT AU FORMAT OBJET
$resultat = $film->fetch(PDO::FETCH_OBJ);

//var_dump($resultat);