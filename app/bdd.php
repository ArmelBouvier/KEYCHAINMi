<?php
// Connexion à la base de données
// Nous utiliserons aussi le gestionnaire d'erreur

$dbname = 'keychainmi';
$user   = 'root';
$pass   = '';

try {
    $connexion = new PDO('mysql:host=localhost;charset=utf8;dbname='.$dbname, $user, $pass);
} catch (PDOException $e){
    print "Erreur !: " . $e->getMessage() . "<br>";
    die();
}