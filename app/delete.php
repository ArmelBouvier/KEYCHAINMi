<?php
// Supprime un mot de passe
require_once 'can-connect.php';
require_once 'bdd.php';

if(!empty($_POST)){
	if(is_numeric($_POST['idMdp']) && !empty($_POST['idMdp'])){

		$delete = $connexion->prepare('DELETE FROM keywords_user WHERE keyword_id = :keyword_id');
		$delete->bindValue(':keyword_id', (int) $_POST['idMdp'], PDO::PARAM_INT);

		if($delete->execute()){
			$del = $connexion->prepare('DELETE FROM keywords WHERE id = :id');
			$del->bindValue(':id', htmlentities($_POST['id']), PDO::PARAM_INT);

			// Exécution de la requête de suppression de la table keywords
			if($del->execute()){
				$json = '<div class="alert alert-success">Le mot de passe a été supprimé avec succès</div>';
			}else{
				$json = '<div class="alert alert-success">Erreur lors de la suppression (k)</div>';
			}

		}else {
			$json = '<div class="alert alert-success">Erreur lors de la suppression (k_u)</div>';
		}
	}
	else {
		$json = '<div class="alert alert-danger">Pas de mot de passe correspondant</div>';
	}
	echo json_encode($json);
}


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