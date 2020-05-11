<?php require_once 'header.php'; ?>
<main role="main" class="container-fluid">
	<section class="container">
		<h1 class="text-primary py-5">Pour utiliser <span class="KEYCHAINMi">KEYCHAINMi</span>, plus que quelques infos à fournir :</h1>

		<form id="inscription" action="" method="POST">

			<div class="row">
				<div class="col-md-4">
					<div class="form-group my-5">
						<input type="text" class="form-control" id="pseudo"  placeholder="Entrez votre pseudo" name="pseudo" required>
					</div>
				</div>
                <div class="col-md-4">
                    <div class="form-group my-5">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrez votre email" name="email" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group my-5">
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Entrez votre mot de passe" name="password" required>
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
