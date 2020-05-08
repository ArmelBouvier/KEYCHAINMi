<!--Ici nous ajoutons une notification lorsque l'on a une donnée dans le tableau $_SESSION-->
<?php if(!empty($_SESSION)) : ?>
    <?php foreach ($_SESSION as $k => $v) : ?>
    <?php if($k === 'success' || $k === 'errors') :?>
    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="2000">
        <div class="toast-header">
            <strong class="mr-auto"><?= $k; ?></strong>
            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="toast-body">
            <?= $v; ?>
        </div>
    </div>
    <?php endif; endforeach;
        unset($_SESSION['success']);
        unset($_SESSION['errors']);
    ?>
<?php endif; ?>
