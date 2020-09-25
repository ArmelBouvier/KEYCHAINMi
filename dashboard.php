<?php
require_once 'app/can-connect.php';
require_once 'header.php';
?>

<main role="main" class="container-fluid">

	<section class="container">

        <div id="resultAjax"></div>

        <h1 class="text-primary py-5">Vos informations <span class="KEYCHAINMi">KEYCHAINMi</span> :</h1>
        <div class="row justify-content-center my-3">
            <button id="createUrl" class="btn btn-outline-primary" >Créer un nouveau mot de passe</button>
        </div>
        <div class=" row justify-content-center mb-2">
            <form  action="#" method="post" class="invisible" id="formUrl">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-2">
                            <input type="text" class="form-control" id="pseudo"  placeholder="Nom du site" name="site">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-2">
                            <input type="text" class="form-control" id="pseudo"  placeholder="Copiez l'url du site" name="url" required>
                        </div>
                    </div>
                </div>
                <div class="row pb-2">
                    <div class="col-md-12 d-flex justify-content-center">
                        <button type="submit" class="btn btn-outline-primary">Envoyer</button>
                    </div>
                </div>
            </form>
        </div>
        <table class="table">
            <thead>
            <tr>
                <th class="text-muted">Nom du site</th>
                <th class="text-muted">URL</th>
                <th class="text-muted">Mot de passe</th>
                <th></th>
                <th></th>
            </tr>

            </thead>
            <tbody id="mdpList" class="text-white">
            </tbody>
        </table>

	</section>

</main>
<script>
    $(document).ready(function(){

        $('button[type="submit"]').on('click', function(element){

            // On bloque l'envoi "standard" du formulaire
            element.preventDefault();

            $.ajax({
                url: 'app/addUrl.php', // on détermine le fichier de traitement
                type: 'post', // méthode employée pour le formulaire
                data: $('form').serialize(),
                dataType: 'json',
                success: function(resPHP){ // resPHP => $json dans le PHP
                    if(resPHP.result == 'ok'){
                        $('#resultAjax').html('<div class="alert alert-success">' + resPHP.message + '</div>');
                    }
                    else if(resPHP.result == 'ko'){
                        $('#resultAjax').html('<div class="alert alert-danger">' + resPHP.message + '</div>');
                    }
                    // charger les mots de passe provenant de 'app/traitementDashboard.php' dans la div #mdpList
                    $.getJSON('app/traitementDashboard.php', function(data){ //inclure le json de la page en question citée ci dessous par l'id définie
                        $('#mdpList').html(data);
                    });
                },

            });

        });

        $(function(){
            $.getJSON('app/traitementDashboard.php', function(data){ // va chercher les données
                $('#mdpList').html(data); //affichage du tableau sans réactualiser la page entière, avec modifications effectuées
            });

            $('body').on('click', 'a.delete', function(e){
                //on désactive la fonction du lien a.delete avec la ligne suivante
                e.preventDefault();

                $.ajax({
                    url: 'app/delete.php', //renvoie à la page de traitement
                    type: 'post',
                    data: {idMdp: $(this).data('id')}, // on récupère l'id de l'article choisi
                    dataType: 'json',
                    success: function(result){ // si ca marche
                        $('#successOrError').html(result); // affichage du resultat en html
                    }
                });
            });
        });

    });
</script>
<?php require_once 'footer.php' ?>