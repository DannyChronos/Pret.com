<?php
require_once('../Model/HomeModel.php');
$row = verify();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="theme.min.css">
    <title></title>
</head>

<body>
    <div class="container pb-5 mb-2 mb-md-4">
        <div class="row">
            <section class="col-lg-12">
                <!-- Steps-->
                <?php
                switch ($row['status']) {
                    case 'Première étape':
                        echo "                <div class='progress'>
                        <div class='progress-bar progress-bar-striped bg-success' role='progressbar' style='width: 10%' aria-valuenow='10' aria-valuemin='0' aria-valuemax='100'><b>10%</b></div>
                    </div>                         <p></p><center><p>Uw leningaanvraag wordt verwerkt. De klantenservice neemt contact met u op</p></center>";
                        break;
                    case 'Deuxième étape':
                        echo "                <div class='progress'>
                        <div class='progress-bar progress-bar-striped bg-success' role='progressbar' style='width: 25%' aria-valuenow='25' aria-valuemin='0' aria-valuemax='100'><b>25%</b></div>
                    </div><p></p><center><p>Uw leningaanvraag wordt verwerkt. De klantenservice neemt contact met u op</p></center>";
                        break;
                    case 'Troisième étape':
                        echo "                <div class='progress'>
                        <div class='progress-bar progress-bar-striped bg-success' role='progressbar' style='width: 50%' aria-valuenow='50' aria-valuemin='0' aria-valuemax='100'><b>50%</b></div>
                    </div><p></p><center><p>Uw leningaanvraag wordt verwerkt. De klantenservice neemt contact met u op</p></center>";
                        break;
                    case 'Quatrième étape':
                        echo "                <div class='progress'>
                        <div class='progress-bar progress-bar-striped bg-success' role='progressbar' style='width: 75%' aria-valuenow='75' aria-valuemin='0' aria-valuemax='100'><b>75%</b></div>
                    </div><p></p><center><p>Uw leningaanvraag wordt verwerkt. De klantenservice neemt contact met u op</p></center>";
                        break;
                    default:
                    echo ("                <div class='progress'>
                    <div class='progress-bar progress-bar-striped bg-success' role='progressbar' style='width: 100%' aria-valuenow='100' aria-valuemin='0' aria-valuemax='100'><b>100%</b></div>
                </div><p></p><center><p style='font-size: 20px!important;'>Gefeliciteerd</p><p><form action='' method='post'><button type='submit' class='btn btn-success' name='etat' value='".$row['id_lend']."'>Afgerond</button></form></p></center>");
                        break;
                }
                ?>
                <!-- Payment methods accordion-->
            </section>
        </div>
    </div>
</body>

</html>