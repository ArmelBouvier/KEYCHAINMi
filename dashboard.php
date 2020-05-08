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
					<th scope="col" id="titre">Titre</th>
					<th scope="col" id="adresse">Adresse</th>
					<th scope="col" id="cp">Code postal</th>
					<th scope="col" id="ville">Ville</th>
					<th scope="col" id="surface">Surface</th>
					<th scope="col" id="prix">Prix</th>
					<th scope="col" id="description">Description</th>
					<th scope="col" id="photo">Photo</th>
					<th scope="col" id="vue"></th>
				</tr>
				</thead>
				<tbody>
				<?php for ($i = 0, $iMax = count($resultats); $i < $iMax; $i++) : ?>
					<tr>
						<td><?=$resultats[$i]->titre?></td>
						<td><?=$resultats[$i]->adresse?></td>
						<td><?=$resultats[$i]->cp?></td>
						<td><?=$resultats[$i]->ville?></td>
						<td><?=$resultats[$i]->surface?>m²</td>
						<td><?=$resultats[$i]->prix?>€</td>
						<td><?=$resultats[$i]->description?></td>
						<td><img src="images/miniatures/<?=$resultats[$i]->photo?>" alt="pas de photo"></td>
						<td><a href="bien.php?id=<?=$resultats[$i]->id_logement?>" class="btn btn-sm btn-outline-primary"> Voir</a></td>
					</tr>
				<?php endfor; ?>
				</tbody>
			</table>
		</div>
	</div>

</main>

<?php require_once 'footer.php' ?>

<?php require_once 'footer.php'; ?>
