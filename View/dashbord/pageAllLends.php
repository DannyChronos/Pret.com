<?php
require_once('../Model/AdminModel.php');
$list_lend = lend_list();
?>
<!DOCTYPE html>
<html lang="en">

<?php require_once('header.php') ?>

<body>
  <div class="screen-overlay"></div>
  <?php require_once('menuVertical.php'); ?>
  <main class="main-wrap">
  <?php require_once('horizon.php'); ?>
    <section class="content-main">
      <div class="content-header">
        <div>
          <h2 class="content-title card-title">Liste des Prêts</h2>
          <p>Toutes vos prêts (encours ou terminer).</p>
        </div>
        <div>
          <form action="" method="post">
            <input class="form-control bg-white" type="text" placeholder="Rechercher(id, nom, prenom)" name="lend_search">
          </form>
        </div>
      </div>
      <div class="card mb-4">
        <header class="card-header">

        </header>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>#ID du prêt</th>
                  <th scope="col">Nom Complet</th>
                  <th scope="col">Email</th>
                  <th scope="col">Montant</th>
                  <th scope="col">Status</th>
                  <th scope="col">Date</th>
                  <th class="text-end" scope="col"> Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ($list_lend as $one_lend) {
                ?>
                  <tr>
                    <td><?= $one_lend['id_lend'] ?></td>
                    <td><b><?= $one_lend['nom'] ?> <?= $one_lend['prenom'] ?></b></td>
                    <td><a href="#" class="__cf_email__"><?= $one_lend['adresse'] ?></a></td>
                    <td><?= $one_lend['montant'] ?></td>
                    <?php if ($one_lend['status'] != 'terminé') {
                    ?>
                      <td><span class="badge rounded-pill alert-warning">En cours</span></td>
                    <?php
                    } else {
                    ?>
                      <td><span class="badge rounded-pill alert-success">Terminé</span></td>
                    <?php
                    }
                    ?>
                    <td><?= $one_lend['created_at'] ?></td>
                    <td class="text-end"><a class="btn btn-md rounded font-sm" href="/lendDetail/<?= $one_lend['id_lend'] ?>">Detail</a>
                    </td>
                  </tr>
                <?php
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>

    </section>
    <?php require_once('footer.php') ?>
</body>

</html>