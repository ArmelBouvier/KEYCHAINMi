<?php
// Supprime un mot de passe
require_once 'can-connect.php';
require_once 'bdd.php';
echo '<pre>';
var_dump($_SESSION['id']);
var_dump($_GET['id']);
echo '</pre>';

// Sélection de l'assiciation user_id et keyword_id
$delete = $connexion->prepare('DELETE FROM keywords_user WHERE keyword_id = :keyword_id');
$delete->bindValue(':keyword_id', htmlentities($_GET['id']), PDO::PARAM_INT);

// Exécution de la requête de suppression de la table keywords_user
if($delete->execute()){
	$del = $connexion->prepare('DELETE FROM keywords WHERE id = :id');
	$del->bindValue(':id', htmlentities($_GET['id']), PDO::PARAM_INT);

	// Exécution de la requête de suppression de la table keywords
	if($del->execute()){
		$_SESSION['success'] = 'Mot de passe supprimé';
	}else{
		$_SESSION['errors'] = 'Erreur lors de la suppression (k)';
	}
}else{
	$_SESSION['errors'] = 'Erreur lors de la suppression (k_u)';
}

header('Location: ../dashboard.php');