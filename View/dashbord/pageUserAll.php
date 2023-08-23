<?php
  require_once ('../Model/AdminModel.php');
  $all_user = user_list();
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
        <h2 class="content-title">Utilisateurs</h2>
      </div>
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-lg-9">
              <header class="border-bottom mb-4 pb-4">
                <div class="row">
                  <div class="col-lg-5 col-6 me-auto">
                    <input class="form-control" type="text" placeholder="Rechercher...">
                  </div>
                  <div class="col-lg-2 col-6">

                  </div>
                </div>
              </header>
              <!-- card-header end//-->
              <div class="table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>User ID</th>
                      <th>Nom Complet</th>
                      <th>Email</th>
                      <th>Numero</th>
                      <th>Inscris depuis</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      foreach ($all_user as $one_user) {
                    ?>
                    <tr>
                      <td><b><?= $one_user['id'] ?></b></td>
                      <td><?= $one_user['nom'] ?> <?= $one_user['prenom'] ?></td>
                      <td><?= $one_user['email'] ?></td>
                      <td><?= $one_user['numero'] ?></td>
                      <td><?= $one_user['created_at'] ?></td>
                    </tr>
                    <?php
                      }
                    ?>
                  </tbody>
                </table>
              </div>
              <!-- table-responsive.//-->
              <!-- col end//-->
            </div>

            <!-- col end//-->
            <!-- row end//-->
            <!-- card-body //-->
          </div>
        </div>
      </div>
      <!-- card end//-->
    </section>
    <?php require_once('footer.php') ?>
</body>

</html>