<?php
require_once 'app/can-connect.php';
require_once 'app/traitementDashboard.php';
require_once 'header.php';
?>

<main role="main">

	<section class="jumbotron text-center">
		<div class="container">
			<h1>Vos informations :</h1>
			<a class="btn btn-primary" href="addUrl.php">Créer un nouveau mot de passe</a>
		</div>
	</section>

	<div class="album py-5 bg-light">
		<div class="container">
			<table class="table">
				<thead class="thead-dark">
				<tr>
					<th scope="col" id="url">Site</th>
					<th scope="col" id="password">Mot de passe</th>
					<th scope="col" id="cp"></th>
				</tr>
				</thead>
				<tbody>
				<?php for ($i = 0, $iMax = count($resultats); $i < $iMax; $i++) : ?>
					<tr>
						<td><?=$resultats[$i]->titre?></td>
						<td><?=$resultats[$i]->adresse?></td>
						<td><button class="btn-primary">Copier le mot de passe</button></td>
					</tr>
				<?php endfor; ?>
				</tbody>
			</table>
		</div>
	</div>

</main>

<?php require_once 'footer.php' ?>

<?php require_once 'footer.php'; ?>
