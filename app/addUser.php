<?php session_start();

if(isset($_POST) && !empty($_POST)){

	// vérification des champs
	if(!empty($_POST['pseudo']) && isset($_POST['pseudo'])){
		if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
			if(!empty($_POST['password'])&& isset($_POST['password']) && !empty($_POST['name'])&& isset($_POST['name'])){
				if($_POST['password'] === $_POST['confirm-password']) {

					// je récupère la connexion à la base de données
					require_once "bdd.php";

					// vérification que l'email et le pseudo ne soient pas déjà utilisés

					$checkname = "SELECT * FROM users WHERE name = :name";
					$req = $connexion->prepare($checkname);
					$req->bindValue(':name', $_POST['name'], PDO::PARAM_STR);
					$req->execute();
					$resultname  = $req->fetch(PDO::FETCH_OBJ);

					$query = "SELECT * FROM users WHERE email = :email";
					$req= $connexion->prepare($query);
					$req->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
					$req->execute();
					$resultemail = $req->fetch(PDO::FETCH_OBJ);

					if (!$resultemail && !$resultname) {

						$sql = 'INSERT INTO users (name, email, password) VALUES(:name, :email, :password)';
						$req = $connexion->prepare($sql);

						$req->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
						$req->bindValue(':password', $_POST['password'], PDO::PARAM_STR);
						$req->bindValue(':name', $_POST['name'], PDO::PARAM_STR);

						if ($req->execute()) {

							// attribuer un role au nouvel inscrit (par défaut lecteur)
							$id = $connexion->lastInsertId();

							$sql = "INSERT INTO role_user (role_id, user_id) VALUES(2, :id)";
							$req = $connexion->prepare($sql);
							$req->bindValue(':id', $id, PDO::PARAM_INT);
							$req->execute();

							header('Location: /loi-des-series/');

						} else {

							$_SESSION['lecteur'] = false;
							$_SESSION['errors'] = 'erreur';
							header('Location: /loi-des-series/');
						}

					} else {

						$_SESSION['errors'] = 'erreur';
						header('Location: /loi-des-series/');
					}

				} else {

					$_SESSION['errors'] = 'erreur mot de passe';
					header('Location:' . $_SERVER['HTTP_REFERER']);
				}
			} else {

				header('Location:' . $_SERVER['HTTP_REFERER']);
			}

		} else {

			header('Location:' . $_SERVER['HTTP_REFERER']);
		}
	}else{
		$_SESSION['errors'] = 'Veuillez entrer un pseudo';
		header('Location:' . $_SERVER['HTTP_REFERER']);
	}
} else {
	$_SESSION['errors'] = 'Veuillez remplir les champs';
	header('Location:' . $_SERVER['HTTP_REFERER']);
}
