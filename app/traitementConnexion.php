<!--mdp admin : tititatatutu-->

<?php
session_start();
require_once 'bdd.php';
$req = $connexion->prepare( 'SELECT * FROM user WHERE email = :email' );
$req->bindValue( ':email', $_POST['email'], PDO::PARAM_STR );
$req->execute();
$user = $req->fetch( PDO::FETCH_OBJ );
if ( $user ) {
	if ( password_verify( $_POST['password'], $user->password ) ) {
		$_SESSION['access']  = true;
		$_SESSION['success'] = 'Vous êtes connecté ' . $user->pseudo . ' !';
		header( 'Location: ../dashboard.php' );
	} else {
		$_SESSION['errors'] = 'Erreur de mail ou de mot de passe';
		header( 'Location:' . $_SERVER['HTTP_REFERER'] );
	}
} else {
	$_SESSION['errors'] = 'Impossible de vous connecter';
	header( 'Location:' . $_SERVER['HTTP_REFERER'] );
}