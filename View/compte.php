<?php
    require_once("../Model/HomeModel.php");
    $row = verify();
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>Events</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <!-- fonts -->
   <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Roboto:400,700&display=swap" rel="stylesheet">
   <!-- owl stylesheets -->
   <link rel="stylesheet" href="css/owl.carousel.min.css">
   <link rel="stylesheet" href="css/owl.theme.default.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
</head>

<body>
   <!--header section start -->
   <div class="header_section">
      <?php require_once('../View/nav.php'); ?>
   </div>
   <!--header section end -->
   <!-- events section start -->
   <div class="events_section layout_padding">
      <div class="container">
         <?php
            if ($row['etat']==='fermé') {
         ?>
         <h1 class="events_taital">Pas de demande de Prêt en cours....</h1>
         <div class="seemore_bt" style="width: 250px;"><a href="/events">Lancez la demande de prêt</a></div>
         </div>
         <?php
            }else {
         ?>
         <h1 class="events_taital">Votre Prêt pour la somme de <?= $row['montant'] ?> est en cours...</h1>
      <div id="contenu-html"></div>
      <?php
            }
      ?>
   </div>
   <!-- events section end -->
   <!-- footer section start -->
   <div class="footer_section layout_padding">
      <div class="container">
         <div class="location_main">
            <div class="location_text"><img src="images/map-icon.png"><span class="padding_left_10"><a href="#">Location</a></span></div>
            <div class="location_text center"><img src="images/call-icon.png"><span class="padding_left_10"><a href="#">Call ; 01 1234567890</a></span></div>
            <div class="location_text right"><img src="images/mail-icon.png"><span class="padding_left_10"><a href="#">demo@gmail.com</a></span></div>
         </div>
         <div class="footer_section_2">
            <div class="row">
               <div class="col-lg-4">
                  <h2 class="footer_taital">About</h2>
                  <p class="footer_text">There are many variations of passages of Lorem Ipsum available, but the majority havThere are many variations of passages of Lorem Ipsum available, but the majority hav</p>
               </div>
               <div class="col-lg-4">
                  <h2 class="footer_taital">Services Link</h2>
                  <p class="footer_text">There are many variations of passages of Lorem Ipsum available, but the majority havThere are many variations of passages of Lorem Ipsum available, but the majority hav</p>
               </div>
               <div class="col-lg-4">
                  <h2 class="footer_taital">Subscribe</h2>
                  <input type="text" class="Enter_text" placeholder="Enter Your Email" name="Enter Your Email">
                  <div class="subscribe_bt"><a href="#">Subscribe</a></div>
                  <div class="social_icon">
                     <ul>
                        <li><a href="#"><img src="images/fb-icon.png"></a></li>
                        <li><a href="#"><img src="images/twitter-icon.png"></a></li>
                        <li><a href="#"><img src="images/linkedin-icon.png"></a></li>
                        <li><a href="#"><img src="images/instagram-icon.png"></a></li>
                        <li><a href="#"><img src="images/youtub-icon.png"></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- footer section end -->
   <!-- copyright section start -->
   <div class="copyright_section">
      <div class="container">
         <p class="copyright_text">Copyright 2020 All Rights Reserved.<a href="https://html.design"> Free html Templates</a></p>
      </div>
   </div>
   <!-- copyright section end -->
   <!-- Javascript files-->
   <script>
    fetch('/progress')
      .then(response => response.text())
      .then(data => {
        document.getElementById('contenu-html').innerHTML = data;
      })
      .catch(error => console.log(error));
  </script>
   <script src="js/jquery.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/jquery-3.0.0.min.js"></script>
   <script src="js/plugin.js"></script>
   <!-- sidebar -->
   <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="js/custom.js"></script>
   <!-- javascript -->
   <script src="js/owl.carousel.js"></script>
   <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>

</html>