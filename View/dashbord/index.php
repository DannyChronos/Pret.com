<?php
require_once("../Model/AdminModel.php");

$count_user = count_user();
$count_amount = count_lend_amount();
$count_lend = count_lend();
$count_valid = count_valid();
$list_lend = lend_list_home();
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
        <div>
          <h2 class="content-title card-title">Dashboard</h2>
          <p>Toutes les données sur votre entreprise ici</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3">
          <div class="card card-body mb-4">
            <article class="icontext"><span class="icon icon-sm rounded-circle bg-success-light"><i class="text-success material-icons md-group"></i></span>
              <div class="text">

                <h6 class="mb-1 card-title">Utilisateurs</h6><span><?= $count_user['total'] ?></span><span class="text-sm"></span>
              </div>
            </article>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="card card-body mb-4">
            <article class="icontext"><span class="icon icon-sm rounded-circle bg-warning-light"><i class="text-warning material-icons md-double_arrow"></i></span>
              <div class="text">
                <h6 class="mb-1 card-title">Prêt en cours </h6><span><?= $count_lend['total'] ?></span><span class="text-sm"></span>
              </div>
            </article>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="card card-body mb-4">
            <article class="icontext"><span class="icon icon-sm rounded-circle bg-success-light"><i class="text-success material-icons md-check"></i></span>
              <div class="text">
                <h6 class="mb-1 card-title">Prêt Validé </h6><span><?= $count_valid['total'] ?></span><span class="text-sm"></span>
              </div>
            </article>
          </div>
        </div>
      </div>
      <div class="card mb-4">
        <header class="card-header">
          <h4 class="card-title">Commandes Récentes</h4>
          <div class="row align-items-center">
            <div class="col-md-3 col-12 me-auto mb-md-0 mb-3">
              <div class="custom_select">
              </div>
            </div>
            <div class="col-md-2 col-6">

            </div>
            <div class="col-md-2 col-6">
              <div class="custom_select">

              </div>
            </div>
          </div>
        </header>
        <div class="card-body">
          <div class="table-responsive">
            <div class="table-responsive">
              <table class="table align-middle table-nowrap mb-0">
                <thead class="table-light">
                  <tr>
                    <th class="text-center" scope="col">
                      <div class="form-check align-middle">

                      </div>
                    </th>
                    <th class="align-middle" scope="col">ID Prêt</th>
                    <th class="align-middle" scope="col">Clients</th>
                    <th class="align-middle" scope="col">Date</th>
                    <th class="align-middle" scope="col">Montant de prêt</th>
                    <th class="align-middle" scope="col">Statut du prêt</th>
                    <th class="align-middle" scope="col">Banque</th>
                    <th class="align-middle" scope="col">Voir les details</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  while ($one_lend = $list_lend->fetch()) {
                  ?>
                    <tr>
                      <td class="text-center">
                        <div class="form-check">

                        </div>
                      </td>
                      <td><a class="fw-bold" href="#"><?= $one_lend['id_lend'] ?></a></td>
                      <td><?= $one_lend['nom']. ' '.$one_lend['prenom'] ?></td>
                      <td><?= $one_lend['created_at'] ?></td>
                      <td><?= $one_lend['montant'] ?></td>
                      <?php if ($one_lend['status'] == 'terminé') {
                       ?> 
                      <td><span class="badge badge-pill badge-soft-success">Terminé</span></td>
                      <?php }else{ ?>
                        <td><span class="badge badge-pill badge-soft-warning">En attente</span></td>
                      <?php } ?>
                      <td><i class="material-icons md-payment font-xxl text-muted mr-5"></i><?= $one_lend['nom_banque'] ?></td>
                      <td><a class="btn btn-xs" href=<?= '/lendDetail/'.$one_lend['id_lend'] ?>> Voir details</a></td>
                    </tr>
                  <?php
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
          <!-- table-responsive end//-->
        </div>
      </div>
    </section>
    <?php require_once('footer.php'); ?>
</body>

</html>