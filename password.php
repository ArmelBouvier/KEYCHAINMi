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
                <textarea class="text-muted pb-5 js-copytextarea" cols="15" rows="1"><?= $resultat->password; ?></textarea>
            </div>
            <div class="row py-5 justify-content-center" >
                <button class="btn btn-outline-primary js-textareacopybtn">Copier</button>
            </div>
        </section>
        </div>

    </main>

<?php require_once 'footer.php'; ?>