<?php require_once 'header.php'; ?>
<main role="main" class="container-fluid">
	<section class="container my-5">
		<h1 class="text-primary py-5">Créer un mot de passe <span class="KEYCHAINMi">KEYCHAINMi</span> pour un nouveau site :</h1>

		<form action="app/addUrl.php" method="POST">

			<div class="row">
				<div class="col-md-6">
					<div class="form-group my-5">
						<input type="text" class="form-control" id="pseudo"  placeholder="Nom du site" name="site">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group my-5">
						<input type="text" class="form-control" id="pseudo"  placeholder="Copiez l'url du site" name="url" required>
					</div>
				</div>
			</div>
            <div class="row py-5">
                <div class="col-md-12 d-flex justify-content-center">
                    <button type="submit" class="btn btn-outline-primary">Envoyer</button>
                </div>
            </div>
		</form>
	</section>
</main>
<?php require_once 'footer.php' ?>
