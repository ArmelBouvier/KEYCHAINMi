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
    <meta name="description" content="textual rpg maker">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>KEYCHAINMi</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/album/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <!-- Custom style-->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
<header>
    <?php require_once 'notifications.php'; ?>
    <?php if (isset($_SESSION['access']) && $_SESSION['access'] === true) : ?>
        <a href="app/disconnect.php" class="btn btn-danger">Déconnexion</a>
    <?php endif; ?>
    <!--MENU-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            KEYCHAINMi
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav d-flex justify-content-around w-100">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Accueil <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="dashboard.php">Tableau de bord</a>
                <li class="nav-item">
                    <a class="nav-link" href="inscription.php">Inscription</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="connexion.php">Connexion</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
