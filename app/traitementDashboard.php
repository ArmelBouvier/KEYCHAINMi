<?php
// Récupération de toutes les associations site/password depuis la base de données

require_once 'bdd.php';
// Sélection de tous les mots de passe de l'utilisateur
$req = $connexion->prepare('SELECT * 
FROM keywords_user 
    LEFT JOIN keywords 
        ON keywords_user.keyword_id = keywords.id 
WHERE keywords_user.user_id = :user_id');
$req->bindValue(':user_id',htmlentities($_SESSION['id']));
// Exécution de la requête
$req->execute();
// Récupération du résultat
$resultats = $req->fetchAll(PDO::FETCH_OBJ);