<?php

session_start();
// J'autorise l'utilisateur à voir le contenu
// Sinon je le renvoie à la page connexion

if (!isset($_SESSION['access']) && !$_SESSION['access']) {
	$_SESSION['errors'] = 'Veuillez vous connecter pour voir votre tableau de bord !';
    header('Location: ../connexion.php');
    exit;
}
