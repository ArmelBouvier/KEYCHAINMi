<!--mdp admin : tititatatutu-->

<?php session_start();

if ( isset( $_POST ) && ! empty( $_POST ) ) {

	// vérification des champs
	if ( ! empty( $_POST['pseudo'] ) && isset( $_POST['pseudo'] ) ) {
		if ( filter_var( $_POST['email'], FILTER_VALIDATE_EMAIL ) ) {
			if ( ! empty( $_POST['password'] ) && isset( $_POST['password'] ) ) {

				// je récupère la connexion à la base de données
				require_once "bdd.php";

				// vérification que l'email et le pseudo ne soient pas déjà utilisés

				$checknpseudo = "SELECT * FROM user WHERE pseudo = :pseudo";
				$req       = $connexion->prepare( $checknpseudo );
				$req->bindValue( ':pseudo', $_POST['pseudo'], PDO::PARAM_STR );
				$req->execute();
				$resultpseudo = $req->fetch( PDO::FETCH_OBJ );

				$query = "SELECT * FROM user WHERE email = :email";
				$req   = $connexion->prepare( $query );
				$req->bindValue( ':email', $_POST['email'], PDO::PARAM_STR );
				$req->execute();
				$resultemail = $req->fetch( PDO::FETCH_OBJ );

				if ( ! $resultemail && ! $resultpseudo ) {

					$sql = 'INSERT INTO user (pseudo, email, password) VALUES(:pseudo, :email, :password)';
					$req = $connexion->prepare( $sql );

					$req->bindValue( ':email', $_POST['email'], PDO::PARAM_STR );
					$req->bindValue( ':password', password_hash($_POST['password'], PASSWORD_BCRYPT), PDO::PARAM_STR );
					$req->bindValue( ':pseudo', $_POST['pseudo'], PDO::PARAM_STR );

					if ( $req->execute() ) {
						$_SESSION['success']  = 'Félicitation, votre compte a bien été créé !';
						header( 'Location: ../dashboard.php' );

					} else {

						$_SESSION['errors']  = 'erreur lors de l\'ajout de l\'utilisateur';
						header( 'Location: ../inscription.php' );
					}
				} else {
					$_SESSION['errors'] = 'erreur';
					header( 'Location:' . $_SERVER['HTTP_REFERER'] );
				}
			} else {
				$_SESSION['errors'] = 'Veuillez entrer un mot de passe';
				header( 'Location:' . $_SERVER['HTTP_REFERER'] );
			}

		} else {
			$_SESSION['errors'] = 'Veuillez entrer un email';
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
