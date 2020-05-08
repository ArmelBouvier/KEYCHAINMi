<?php require_once 'header.php';?>
<main role="main" class="container-fluid fond">
	<div class="container py-5">
		<h1>Pour vous connecter, il nous faut :</h1>
		<form action="app/traitementConnexion.php" method="POST">
			<div class="form-group my-5">
				<label for="exampleInputEmail1">Adresse mail :</label>
				<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ex : aaa@a.com" name="email" required>
			</div>
			<div class="form-group my-5">
				<label for="exampleInputPassword1">Mot de passe :</label>
				<input type="password" class="form-control" id="exampleInputPassword1" placeholder="votre mot de passe" name="password" required>
			</div>
			<div class="row my-5">
				<div class="col-md-4 d-flex justify-content-center"><button type="submit" class="btn btn-dark my-5">Connexion</button></div>

			</div>
		</form>
	</div>
	<span></span>
</main>
<?php require_once 'footer.php'; ?>
