<?php
require_once 'app/can-connect.php';
require_once 'app/traitementDashboard.php';
require_once 'header.php';
?>

<main role="main" class="container-fluid">

	<section class="container">
			<h1 class="text-primary py-5">Vos informations <span class="KEYCHAINMi">KEYCHAINMi</span> :</h1>
        <div class="row justify-content-center my-5">
            <a class="btn btn-outline-primary" href="addUrl.php">Créer un nouveau mot de passe</a>
        </div>
        <div class="row">
			<?php for ($i = 0; $i < count($resultats); $i++) : ?>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm bg-transparent">
                        <div class="card-body">
                            <h3 class="card-title text-muted"><?=$resultats[$i]->sitename?></h3>
                            <p class="card-text text-white"><?=$resultats[$i]->url?></p>
                            <p class="card-text text-white">Créé le : <?=$resultats[$i]->created_at?></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="password.php?id=<?= $resultats[$i]->id; ?>" class="btn btn-sm btn-outline-success"> Voir</a>
                                    <a href="app/delete.php?id=<?= $resultats[$i]->id; ?>" class="btn btn-sm btn-outline-danger"> Supprimer</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			<?php endfor; ?>
        </div>

	</section>

</main>

<?php require_once 'footer.php' ?>