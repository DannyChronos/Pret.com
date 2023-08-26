<?php
    require_once('../Model/AdminModel.php');
    $result = lend_details($_SESSION['id_lend_admin']);
?>
<!DOCTYPE html>
<html lang="en">

<?php require_once('header.php'); ?>

<body>
  <div class="screen-overlay"></div>
  <?php require_once('menuVertical.php'); ?>
  <main class="main-wrap">
  <?php require_once('horizon.php'); ?>
    <section class="content-main">
      <div class="content-header">
        <a href="/all/lends"><i class="material-icons md-arrow_back"></i> Retour</a>
        <h2 class="content-title card-title"><u> Details du Prêt </u></h2>
        <p></p>

      </div>

      <div class="card mb-4">
        <div class="card-header bg-primary" style="height:150px"></div>
        <div class="card-body">
          <div class="row">
            <div class="col-xl col-lg flex-grow-0" style="flex-basis:230px">
              <div class="img-thumbnail shadow w-100 bg-white position-relative text-center"
                style="height:190px; width:200px; margin-top:-120px">
                
              </div>
            </div>
            <!-- col.//-->
            <div class="col-xl col-lg">
              <h3 style="font-size: 30px; font-weight: bold;">Prêt de <?= $result['montant'] ?></h3>
              <p>Prêt lancé par <?= $result['nom'] ?> <?= $result['prenom'] ?></p>
            </div>
            <!-- col.//-->
            <?php 

            if ($result['status'] != 'terminé') {
              # code...

            ?>
            <div class="col-xl-4 text-md-end">
              <form action="" method="post">
                <button class="btn btn-primary" type="submit" value="<?= $result['status'] ?>" name="change_state">Etape suivante</button>
              </form>
            </div>
            <?php 
              }else{   
            ?>
            <div class="col-xl-4 text-md-end">
            </div>
            <?php 
            }
            ?>
            <!-- col.//-->
            <!-- card-body.//-->
            <hr class="my-4">
            
            <div class="row g-4">
              <center>
              <div class="col-md-12 col-lg-4 col-xl-6">
                <article class="box">
                  <p class="mb-0 text-muted" style="font-weight: bold!important;">Nom Complet:</p>
                  <h5 class="text-success mb-0" style="font-weight: bold;"><?= $result['nom'] ?> <?= $result['prenom'] ?></h5>

                  <p class="mb-0 text-muted" style="font-weight: bold!important;">Pays:</p>
                  <h5 class="text-success mb-0" style="font-weight: bold;"><?= $result['pays'] ?></h5>

                  <p class="mb-0 text-muted" style="font-weight: bold!important;">Adresse:</p>
                  <h5 class="text-success mb-0" style="font-weight: bold;"><?= $result['adresse'] ?></h5>

                  <p class="mb-0 text-muted" style="font-weight: bold!important;">Numero:</p>
                  <h5 class="text-success mb-0" style="font-weight: bold;"><?= $result['numero'] ?></h5>

                  <p class="mb-0 text-muted" style="font-weight: bold!important;">Banque:</p>
                  <h5 class="text-success mb-0" style="font-weight: bold;"><?= $result['nom_banque'] ?></h5>

                  <p class="mb-0 text-muted" style="font-weight: bold!important;">Raison:</p>
                  <h5 class="text-success mb-0" style="font-weight: bold;"><?= $result['raison'] ?></h5>

                  <p class="mb-0 text-muted" style="font-weight: bold!important;">Poste:</p>
                  <h5 class="text-success mb-0" style="font-weight: bold;"><?= $result['poste'] ?></h5>

                  <p class="mb-0 text-muted" style="font-weight: bold!important;">Salaire:</p>
                  <h5 class="text-success mb-0" style="font-weight: bold;"><?= $result['salaire'] ?></h5>

                  <p class="mb-0 text-muted" style="font-weight: bold!important;">Montant de prêt:</p>
                  <h5 class="text-success mb-0" style="font-weight: bold;"><?= $result['montant'] ?></h5>

                  <p class="mb-0 text-muted" style="font-weight: bold!important;">Status:</p>
                  <h5 class="text-success mb-0" style="font-weight: bold;"><?= $result['status'] ?></h5>

                  <a class="btn btn-primary" href="mailto:<?= $result['adresse'] ?>" >contactez (Email)</a>
                  

                </article>
              </div>
              </center>
              <!-- col.//-->
              <hr class="my-4">

                <hr class="my-4">
                <div class="row g-4">
                  <h2 class="content-title card-title" style="text-align: center"><u> Identité du Client </u></h2>

                    
                  <div class="col-6">
                    <center>
                    <div class="shadow"
                    style="height:500px; width: 500px;">
                    <img class="" src="<?= '../'.$result['carte_id_face'] ?>" alt="Logo Brand">
                  </div>
                </center>
    
                  </div>
                  <div class="col-6">
                    <center>
                    <div class="shadow"
                    style="height:500px; width: 500px;">
                    <img class="" src="<?= '../'.$result['carte_id_arriere'] ?>" alt="Logo Brand">
                  </div>
                </center>
    
                  </div>

                </div>
              
              <!-- col.//-->
              <!-- col.//-->
              <!-- row.//-->
              <!-- card-body.//-->
            </div>
          </div>
        </div>
      </div>
      <!-- card.//-->
      </div>
    </section>
    <?php require_once('footer.php'); ?>
</body>

</html>