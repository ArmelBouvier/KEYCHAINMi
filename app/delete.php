<?php
// Supprime un mot de passe
require_once 'can-connect.php';
require_once 'bdd.php';
echo '<pre>';
var_dump($_SESSION);
echo '</pre>';
echo '<pre>';
var_dump($_GET);
echo '</pre>';


// Sélection
$delete = $connexion->prepare('DELETE FROM keywords WHERE id = :id');
$delete->bindValue(':id', $_POST['id'], PDO::PARAM_INT);
// EXECUTION DE LA REQUETE
if($delete->execute()){
    $_SESSION['success'] = 'Mot de passe supprimé';
}else{
    $_SESSION['errors'] = 'Erreur lors de la suppression';
}
header('Location: ../dashboard.php');