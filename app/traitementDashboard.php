<?php
// Récupération de toutes les associations site/password depuis la base de données
session_start();
require_once 'bdd.php';
// Sélection de tous les mots de passe de l'utilisateur
$req = $connexion->prepare('
SELECT * 
FROM keywords_user 
LEFT JOIN keywords 
ON keywords_user.keyword_id = keywords.id 
WHERE keywords_user.user_id = :user_id');
$req->bindValue(':user_id',htmlentities($_SESSION['id']));

if($req->execute()) {
	// Exécution de la requête
	$req->execute();
	// Récupération du résultat
	$resultats = $req->fetchAll();
//var_dump($resultats);

	$json = '';
	foreach ( $resultats as $mdp ) {
		$json .= '<tr>';
		$json .= '<td>' . $mdp['sitename'] . '</td>';
		$json .= '<td>' . $mdp['url'] . '</td>';
		$json .= '<td>
	            <input type="text" class="invisible text-white text-center js-copytextarea bg-dark text-primary"
	                   value="' . $mdp['password'] . '">
               <button class="affichage text-white btn btn-sm btn-outline-secondary">Afficher</button>
               </td>';
		$json .= '<td>
	            <button class="text-white btn btn-sm btn-outline-btn-outline-secondary js-textareacopybtn">Copier</button></td>';
		$json .= '<td><a href="#" data-id="' . $mdp['id'] . '" class="text-white btn btn-sm btn-outline-btn-outline-secondary"> Supprimer</a></td>';
		$json .= '</tr>';
	}

	echo json_encode( $json );
}