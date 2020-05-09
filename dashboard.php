<?php
require_once 'app/can-connect.php';
require_once 'app/traitementDashboard.php';
require_once 'header.php';
?>

<main role="main" class="container-fluid">

	<section class="container">
		<div class="row">
			<h1 class="text-primary py-5">Vos informations <span class="KEYCHAINMi">KEYCHAINMi</span> :</h1></div>
        <div class="row justify-content-center my-5">
            <a class="btn btn-outline-primary" href="addUrl.php">Créer un nouveau mot de passe</a>
        </div>
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col" id="url">Site</th>
                <th scope="col" id="password">Mot de passe</th>
                <th scope="col" id="cp"></th>
            </tr>
            </thead>
            <tbody class="text-white">
			<?php for ($i = 0, $iMax = count($resultats); $i < $iMax; $i++) : ?>
                <tr>
                    <td><?=$resultats[$i]->sitename?></td>
                    <td class="pwd"><?=$resultats[$i]->password?></td>
                    <td><button  class="copy btn btn-outline-primary">Copier</button></td>
                </tr>
			<?php endfor; ?>
            </tbody>
        </table>
	</section>

</main>

<?php require_once 'footer.php' ?>

<?php require_once 'footer.php'; ?>
