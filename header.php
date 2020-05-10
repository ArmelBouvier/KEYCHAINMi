<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="HTML5 website template">
    <meta name="keywords" content="global, template, html, sass, jquery">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>KEYCHAINMi</title>


    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <!-- Custom style-->
    <link href="css/main.css" rel="stylesheet">
</head>

<body>
<?php require_once 'notifications.php';?>
<header>


    <!--MENU-->
<div class="container-fluid">
	<?php if (isset($_SESSION['access']) && $_SESSION['access'] === true) : ?>
        <div class="row">
            <div class="col-12 d-flex justify-content-end"><a href="app/disconnect.php" class="btn btn-outline-warning">Déconnexion</a></div>
        </div>
	<?php endif; ?>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand text-white" href="#">
            <img src="img/logo2.png" alt="KEYCHAINMi">
            <span class="KEYCHAINMi">KEYCHAINMI</span>
        </a>
        <button class="navbar-toggler btn-primary" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon bg-primary"></span>
        </button>

        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav ">
                <li class="nav-item">
                    <a class="nav-link text-primary" href="index.php">Accueil <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-primary" href="inscription.php">Inscription</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-primary" href="connexion.php">Connexion</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-primary" href="dashboard.php">Tableau de bord</a>
                </li>
            </ul>
        </div>
    </nav>
</div>


</header>
