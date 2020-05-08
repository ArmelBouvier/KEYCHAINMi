<?php require_once 'header.php'; ?>
<main role="main" class="container-fluid">
	<section class="container">
		<h1 class="py-5">Bienvenue sur KEYCHAINMi, le gestionnaire de mot de passe !</h1>

		<form action="app/addUser.php" method="POST">
			<div class="row">
				<div class="col-md-12 d-flex justify-content-center">
					<button type="submit" class="btn btn-dark">Envoyer</button>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="form-group my-5">
						<label for="lastname">Pseudo</label>
						<input type="text" class="form-control" id="pseudo"  placeholder="Entrez votre pseudo" name="pseudo" required>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group my-5">
						<label for="exampleInputEmail1">Adresse mail</label>
						<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrez votre email" name="email" required>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group my-5">
						<label for="exampleInputPassword1">Mot de passe</label>
						<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Entrez votre mot de passe" name="password" required>
					</div>
				</div>
			</div>
		</form>
	</section>
</main>
<?php require_once 'footer.php' ?>
