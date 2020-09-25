<!--mdp admin : tititatatutu-->

<?php session_start();
require_once 'can-connect.php';
require_once 'passwordGenerator.php';
require_once 'bdd.php';

if ( isset( $_POST ) && ! empty( $_POST ) ) {

	// vérification des champs
	if ( ! empty( $_POST['site'] ) && isset( $_POST['site'] ) ) {
			if ( ! empty( $_POST['url'] ) && isset( $_POST['url'] ) ) {

				// je récupère la connexion à la base de données
				require_once "bdd.php";

				// vérification que le site et l'url' ne soient pas déjà enregistrés

				$checksite = "SELECT * FROM keywords WHERE sitename = :site";
				$req       = $connexion->prepare( $checksite );
				$req->bindValue( ':site', htmlentities($_POST['site']), PDO::PARAM_STR );
				$req->execute();
				$resultsite = $req->fetch( PDO::FETCH_OBJ );

				$query = "SELECT * FROM keywords WHERE url = :url";
				$req   = $connexion->prepare( $query );
				$req->bindValue( ':url', htmlentities($_POST['url']), PDO::PARAM_STR );
				$req->execute();
				$resulturl = $req->fetch( PDO::FETCH_OBJ );

				if ( ! $resultsite && ! $resulturl ) {

					$sql = 'INSERT INTO keywords (sitename, url, password, user_id) VALUES(:site, :url, :password, :user_id)';
					$req = $connexion->prepare( $sql );

					$req->bindValue( ':site', $_POST['site'], PDO::PARAM_STR );
					$req->bindValue( ':url', $_POST['url'], PDO::PARAM_STR );
					$mdp = passwordGenerator();
					$req->bindValue( ':password', $mdp, PDO::PARAM_STR );
					$req->bindValue( ':user_id', $_SESSION['id'], PDO::PARAM_STR );

					if ( $req->execute() ) {
						// associer le keyword au user dans la table keywords_user
						$keyword_id = $connexion->lastInsertId();
						$user_id = $_SESSION['id'];
						$sql = "INSERT INTO keywords_user (user_id, keyword_id) VALUES(:Uid, :Kid)";
						$req = $connexion->prepare($sql);
						$req->bindValue(':Uid', $user_id, PDO::PARAM_INT);
						$req->bindValue(':Kid', $keyword_id, PDO::PARAM_INT);
						$req->execute();

						$json = [ // est égal à resPHP dans le JS
							'result' => 'ok',
							'message' => 'Votre mot de passe a bien été ajouté',
						];

					} else {

						$_SESSION['errors']  = 'erreur lors de l\'ajout du mot de passe';
						header( 'Location:' . $_SERVER['HTTP_REFERER'] );
					}
				} else {
					$_SESSION['errors'] = 'erreur lors de l\'ajout du mot de passe';
					header( 'Location:' . $_SERVER['HTTP_REFERER'] );
				}
			} else {
				$_SESSION['errors'] = 'Veuillez entrer un mot de passe';
				header( 'Location:' . $_SERVER['HTTP_REFERER'] );
			}
	} else {
		$_SESSION['errors'] = 'Veuillez entrer un pseudo';
		header( 'Location:' . $_SERVER['HTTP_REFERER'] );
	}
} else {
	$_SESSION['errors'] = 'Veuillez remplir les champs';
	header( 'Location:' . $_SERVER['HTTP_REFERER'] );
}

