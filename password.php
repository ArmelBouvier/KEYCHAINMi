<?php
require_once 'app/can-connect.php';
require_once 'header.php';
require_once 'app/password.php';
?>
    <main role="main" class="container-fluid">

        <section class="container">
            <div class="row pt-5">
                <div class="col-md-12 text-center">
                    <h1 class="text-primary py-5">Votre mot de passe :</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <input type="text"
                           class="form-control text-center js-copytextarea bg-dark text-primary"
                           value="<?= $resultat->password; ?>">
                </div>

            </div>
            <div class="row py-5 justify-content-center" >
                <button class="btn btn-outline-primary js-textareacopybtn">Copier</button>
            </div>
        </section>
        </div>

    </main>

<?php require_once 'footer.php'; ?>