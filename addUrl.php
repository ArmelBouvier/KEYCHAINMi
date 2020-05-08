<?php require_once 'header.php'; ?>
<main role="main" class="container-fluid">
	<section class="container">
		<h1 class="py-5">Créer un mot de passe pour un nouveau site :</h1>

		<form action="app/addUrl.php" method="POST">
			<div class="row">
				<div class="col-md-12 d-flex justify-content-center">
					<button type="submit" class="btn btn-dark">Envoyer</button>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group my-5">
						<label for="site">Nom du site</label>
						<input type="text" class="form-control" id="pseudo"  placeholder="Nom du site" name="site">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group my-5">
						<label for="url">Adresse du site</label>
						<input type="text" class="form-control" id="pseudo"  placeholder="Copiez l'url du site" name="url" required>
					</div>
				</div>
			</div>
		</form>
	</section>
</main>
<?php require_once 'footer.php' ?>
