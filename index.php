<?php
/*KEYCHAINMi
Créer une application responsive avec une approche mobile first qui permet à l’utilisateur
de générer des mots de passe aléatoire et complexe et de les lier à une URL.
Proposer à l’utilisateur de copier son mot de passe.
Il doit y avoir un espace utilisateur, celui-ci peut s’inscrire pour adhérer au service
et voir dans son compte la liste des sites avec les mots de passe cachés.
Quand il clique sur voir le mot de passe, il s’affiche et on lui affiche un
bouton qui permet de copier le mot de passe.*/

// Etapes :
// faire une page d'inscription
// faire une page utilisateur
// faire un générateur de mot de passe costaud
// faire une db avec 3 tables :
// une table user : id, pseudo, email, password, created_at
// une table keywords : id, url, password, created_at
// une table keywords_user : user_id (FK), keyword_id (FK)
// associer des url aux mots de passe via une db
// associer les mdp à un bouton copier

require_once 'header.php';?>

<main role="main" class="container-fluid">
	<section class="container">
		<h1 class="py-5">Bienvenue sur KEYCHAINMi, le gestionnaire de mot de passe !</h1>

		<div class="row py-5">
			<div class="col-md-6"><a class="btn btn-primary" href="connexion.php">Se connecter</a></div>
			<div class="col-md-6"><a class="btn btn-primary" href="inscription.php">S'inscrire</a></div>
		</div>

	</section>
</main>

<?php require_once 'footer.php'; ?>

