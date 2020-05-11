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
        <table class="table">
            <thead>
            <tr>
                <th class="text-muted">Nom du site</th>
                <th class="text-muted">URL</th>
                <th class="text-muted">Mot de passe</th>
                <th></th>
            </tr>

            </thead>
            <tbody>
                <tr>
	                <?php for ($i = 0, $iMax = count($resultats); $i < $iMax; $i++) : ?>
                <tr>
                    <td class="text-white"><?=$resultats[$i]->sitename?></td>
                    <td class="text-white"><?=$resultats[$i]->url?></td>
                    <td class="text-white"><a href="password.php?id=<?=$resultats[$i]->id?>" class="btn btn-outline-success">Afficher</a></td>
                    <td class="text-white"><a href="app/delete.php?id=<?= $resultats[$i]->id; ?>" class="btn btn-sm btn-outline-danger"> Supprimer</a></td>
                </tr>
                <?php endfor; ?>
                </tr>
            </tbody>
        </table>

	</section>

</main>

<?php require_once 'footer.php' ?>