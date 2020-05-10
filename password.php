<?php
require_once 'app/can-connect.php';
require_once 'header.php';
require_once 'app/view.php';
?>
  <main role="main">

    <section class="jumbotron text-center">
      <div class="container">
        <h1 class="jumbotron-heading">Cours de PHP & MySQL</h1>
        <p class="lead text-muted">TP MySQL Liste de films.</p>
      </div>
    </section>

    <div class="album py-5 bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <!-- ICI COMMENCE NOTRE PHP -->
            <h2><?=$resultat->title?></h2>
              <p><?=$resultat->description?></p>
              <img src="images/<?=$resultat->image?>" alt="">
          </div>
        </div>
      </div>
    </div>
      <!--                        <button class="showButton btn btn-outline-success">On</button>-->
      <!--                        <button class="hideButton btn btn-outline-danger">Off</button>-->
      <!--                        <button  class="copy btn btn-outline-primary">Copier</button>-->
  </main>

<?php require_once 'footer.php'; ?>