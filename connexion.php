<?php require_once 'header.php';?>
<main role="main" class="container-fluid fond">
	<section class="container">
		<h1 class="text-primary py-5">Pour vous connecter à <span class="KEYCHAINMi">KEYCHAINMi</span>, il nous faut :</h1>
		<form action="app/traitementConnexion.php" method="POST">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group my-5">
                        <label class="text-white" for="exampleInputEmail1">Adresse mail :</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ex : aaa@a.com" name="email" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group my-5">
                        <label class="text-white" for="exampleInputPassword1">Mot de passe :</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="votre mot de passe" name="password" required>
                    </div>
                </div>
            </div>
            <div class="row my-5">
				<div class="col-md-4 d-flex justify-content-center"><button type="submit" class="btn btn-outline-primary my-5">Connexion</button></div>
			</div>
		</form>
	</section>
	<span></span>
</main>
<?php require_once 'footer.php'; ?>
