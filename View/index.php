<!DOCTYPE html>
<html lang="nl">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>CoBsine</title>
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
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
   <style>
      .close-icon {
         position: absolute;
         top: 10px;
         right: 10px;
         font-size: 20px;
         color: #333;
         cursor: pointer;
      }

      .popup-content button {
         background-color: #007bff;
         color: white;
         border: none;
         padding: 10px 20px;
         border-radius: 4px;
         cursor: pointer;
         margin: 10px;
         font-size: 16px;
      }

      .popup-content button.close {
         background-color: #ccc;
         color: #333;
      }

      .popup {
         display: none;
         position: fixed;
         top: 0;
         left: 0;
         width: 100%;
         height: 100%;
         background-color: rgba(0, 0, 0, 0.5);
         justify-content: center;
         align-items: center;
      }

      .popup-content {
         background-color: white;
         padding: 20px;
         border-radius: 8px;
         text-align: center;
         max-width: 400px;
      }

      .popup-content a {
         color: blue;
         text-decoration: underline;
      }

      .moving-image {
         position: relative;
         left: -100%;
         transition: left 1s ease-in-out;
      }

      .moving-image-right {
         position: relative;
         right: -100%;
         transition: right 1s ease-in-out;
      }

      .zoom-image {
         width: 500px;
         transition: transform 0.5s;
      }

      .animated-image {
         position: absolute;
         top: -100%;
         left: 50%;
         transform: translate(-50%);
         transition: top 1s ease;
      }
   </style>
   <div id="google_translate_element">
      <!--header section start -->
      <div class="header_section">
         <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="logo"><a href="/"><img src="images/logo.png"></a></div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                     <a class="nav-link" href="/">Startpagina</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#about">Over ons</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#service">Hoe het werkt</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#contact">Contact</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="/login">Inloggen</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="/register">Aanmelden</a>
                  </li>
               </ul>


            </div>
         </nav>
         <!--banner section start -->
         <div class="banner_section layout_padding">
            <div class="container-fluid">
               <section class="slide-wrapper">
                  <div class="container-fluid">
                     <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                           <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                           <li data-target="#myCarousel" data-slide-to="1"></li>
                           <li data-target="#myCarousel" data-slide-to="2"></li>

                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                           <div class="carousel-item active">
                              <div class="container">
                                 <div class="banner_main">
                                    <h1 class="banner_taital">Wilt u een lening vinden?</h1>
                                    <p class="banner_text">Wij zijn de beste oplossing voor uw persoonlijke lening. Eenvoudig en zeer toegankelijk voor u.</p>
                                    <div class="btn_main">
                                       <div class="contact_bt active" style="width: 300px !important;"><a href="/login">Een lening aanvragen</a></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="carousel-item">
                              <div class="container">
                                 <div class="banner_main">
                                    <h1 class="banner_taital">Een lening nodig met een rente van -10%</h1>
                                    <p class="banner_text">Onze rentetarieven zijn laag genoeg om u in staat te stellen af ​​te lossen zonder schulden te maken</p>
                                    <div class="btn_main">

                                       <div class="readmore_bt"><a href="https://wa.me/6192065">Neem contact</a></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="carousel-item">
                              <div class="container">
                                 <div class="banner_main">
                                    <h1 class="banner_taital">Sluit u aan bij onze microfinanciering</h1>
                                    <p class="banner_text">Registreer u en word lid van ons platform om de beste leentarieven te krijgen</p>
                                    <div class="btn_main">
                                       <div class="contact_bt active "><a href="/register">Register</a></div>
                                       <div class="readmore_bt"><a href="/login">Log in</a></div>
                                    </div>
                                 </div>
                              </div>
                           </div>


                        </div>
                     </div>
                  </div>
               </section>
            </div>
         </div>
         <!--banner section end -->
      </div>
      <!--header section end -->
      <!--about section start -->
      <div class="about_section layout_padding" id="about">
         <div class="container">
            <h1 class="about_taital">Over</h1>
            <p class="about_text">Wij zijn een microfinancieringsagentschap waarmee individuen een banklening kunnen krijgen om hun levensomstandigheden te verbeteren. </p>
            <div class="about_section_2">
               <div class="row">
                  <div class="col-lg-6">
                     <div class="about_image"><img class="moving-image" src="images/about-img.png"></div>
                  </div>
                  <div class="col-lg-6">
                     <div class="about_taital_main">
                        <p class="lorem_text">Onze prioriteit is om u te helpen uit uw financiële leven te komen. Wij zijn een team van gecertificeerde experts wereldwijd.</p>
                        <br>
                        <div class="row g-0 mb-3" style="margin-top: 100px;">
                           <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                              <h5 class="mb-3 count" style="font-weight: bold ; font-size: 23px; color: #13a25d;"> N°10 wereldwijd</h5>
                              <h5 class="mb-3" style="font-weight: bold ; font-size: 23px; color: #13a25d"> Professionaliteit</h5>
                           </div>
                           <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                              <h5 class="mb-3 counter" style="font-weight: bold ; font-size: 23px; color: #13a25d"> -100 % van Tarief</h5>
                              <h5 class="mb-3 count2" style="font-weight: bold ; font-size: 23px; color: #13a25d"> 0h/24</h5>
                           </div>
                        </div>

                        <div class="read_bt" style="width: 250px;"><a href="/login">Een lening aanvragen</a></div>


                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--about section end -->
      <!-- services section start -->
      <div class="services_section layout_padding" id="service">
         <div class="container zoomOut" data-wow-delay="0.6s">
            <h1 class="services_taital">Hoe kunt u bij ons een lening krijgen?</h1>
            <p class="about_text">Ons systeem voor het verkrijgen van een lening is heel eenvoudig vergeleken met de andere structuur.</p>
            <div class="services_section_2">
               <div class="row">
                  <div class="col-lg-4">
                     <div class="icon_box">
                        <div class="icon_1 fadeIn" data-wow-delay="0.6s"><img src="images/icon-1.png"></div>
                     </div>
                     <h4 class="selection_text">Dien uw verzoek in</h4>
                     <p class="ipsum_text">Schrijf en stuur ons uw leningsaanvraag door het leningsformulier in te vullen met uw geverifieerde gegevens, zodat u kans maakt dat uw aanvraag wordt gevalideerd./p>
                     <div class="icon_box">
                        <div class="icon_1 fadeIn" data-wow-delay="0.6s"><img src="images/icon-4.png"></div>
                     </div>
                     <h4 class="selection_text">Valideer uw aanvraag</h4>
                     <p class="ipsum_text">Zodra uw aanvraag bij ons team is ingediend, zullen zij deze zo snel mogelijk analyseren en voor u valideren om uw lening te verkrijgen.</p>
                  </div>
                  <div class="col-lg-4">

                     <div class="icon_box">
                        <div class="icon_1 fadeIn" data-wow-delay="0.6s"><img src="images/icon-5.png"></div>
                     </div>
                     <h4 class="selection_text">Ontvang uw lening</h4>
                     <p class="ipsum_text">Zodra uw leningvalidatie is voltooid, hoeft u alleen maar de instructies van ons team te volgen om het geld zo snel en gemakkelijk mogelijk te innen.</p>
                     <div class="icon_box">
                        <div class="icon_1 fadeIn" data-wow-delay="0.6s"><img src="images/icon-6.png"></div>
                     </div>
                     <h4 class="selection_text">Regel de voorwaarden op tijd</h4>
                     <p class="ipsum_text">Betaal ons alstublieft op tijd terug om uw kansen op een nieuwe te vergroten.</p>
                  </div>

               </div>
            </div>
         </div>
      </div>
      <!-- services section end -->
      <!-- blog section start -->
      <div class="blog_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-6 fadeInUp" data-wow-delay="0.6s">
                  <div class="blog_img"><img class="zoom-image" src="images/p1.jpg"></div>
               </div>
               <div class="col-md-6">
                  <h1 class="blog_taital">Vind eenvoudig een lening om uw projecten te financieren.</h1>
                  <p class="blog_text" style="padding-bottom: 30px !important;">Heeft u financiële projecten, levensprojecten, persoonlijke projecten en nog veel meer? Wij zijn de beste microfinancieringsstructuur om een ​​lening met zeer lage terugbetalingstarieven te verkrijgen. </p>

                  <div class="read_b"><a href="/login">Een lening aanvragen</a></div>
               </div>
            </div>
         </div>
      </div>
      <!-- blog section end -->
      <!-- events section start -->
      <div class="events_section layout_padding">
         <div class="container">
            <h1 class="events_taital">Een dynamisch team dat tot uw dienst staat</h1>
            <div class="events_section_2">
               <div class="events_bg">
                  <div class="play_icon"><a href="#"><img src="images/play-icon.png"></a></div>
               </div>
            </div>
            <div class="seemore_bt" style="width: 300px !important;"><a href="#">Neem contact met ons op</a></div>
         </div>
      </div>
      <!-- events section end -->
      <!-- contact section start -->
      <div class="contact_section layout_padding" id="contact">
         <div class="container">
            <h1 class="contact_taital">Contact email</h1>
            <p class="contact_text">Stuur ons een e-mail of neem contact met ons op voor uw vragen </p>
            <div class="contact_section_2 layout_padding">
               <div class="row">
                  <div class="col-md-6">
                     <div class="contact_main">
                        <input type="text" class="mail_text" placeholder="Voor-en achternaam" name="Nom_Complet">
                        <input type="text" class="mail_text" placeholder="Nummer" name="Numéro de téléphone">
                        <input type="text" class="mail_text" placeholder="E-mail" name="Email">
                        <textarea class="massage-bt" placeholder="Bericht" rows="5" id="comment" name="Message"></textarea>
                        <div class="send_bt"><a href="#">Versturen</a></div>
                     </div>
                  </div>

               </div>
            </div>
         </div>
      </div>
      <!-- contact section end -->
      <!-- testimonial section start -->
      <div class="testimonial_section layout_padding">
         <div id="my_carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#my_carousel" data-slide-to="0" class="active"></li>
               <li data-target="#my_carousel" data-slide-to="1"></li>
               <li data-target="#my_carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <h1 class="testimonial_taital">De mening van klanten</h1>
                     <p class="testimonial_text">We hadden een klantenkring die erg tevreden was over onze dienstverlening. </p>
                     <div class="testimonial_section_2">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="testimonial_box">
                                 <div class="jonimo_taital_main">
                                 <div class="quick_icon" style="margin-bottom: 10%!important;"><img src="images/avatar1.jpg" alt="" sizes="" srcset="" width="100" height="100"></div>
                                    <h4 class="jonimo_text" style="margin-top: 5%!important;">Jonimo</h4>
                                    <div class="quick_icon" style="margin-top: 5%!important;"><img src="images/quick-icon.png"></div>
                                    <div class="quick_icon_1" style="margin-top: 5%!important;"><img src="images/quick-icon1.png"></div>
                                 </div>
                                 <p class="dummy_text">Ik ben zo blij dat ik deze structuur heb leren kennen. Leningen met een vrij lage rente, ik raad u aan</p>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="testimonial_box">
                                 <div class="jonimo_taital_main">
                                 <div class="quick_icon" style="margin-bottom: 10%!important;"><img src="images/avatar1.jpg" alt="" sizes="" srcset="" width="100" height="100"></div>
                                    <h4 class="jonimo_text" style="margin-top: 5%!important;">Mark Duo</h4>
                                    <div class="quick_icon" style="margin-top: 5%!important;"><img src="images/quick-icon.png"></div>
                                    <div class="quick_icon_1" style="margin-top: 5%!important;"><img src="images/quick-icon1.png"></div>
                                 </div>
                                 <p class="dummy_text">Dankzij eu heb ik eindelijk mijn huis gebouwd. Een werkelijk buitengewone lening. Ik had tranen in mijn ogen op de dag dat ik het geld ontving. Ik stel het je voor.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <h1 class="testimonial_taital">Ze vertrouwden ons</h1>

                     <p class="testimonial_text">We hadden een klantenkring die erg tevreden was over onze dienstverlening. </p>
                     <div class="testimonial_section_2">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="testimonial_box">
                                 <div class="jonimo_taital_main">
                                 <div class="quick_icon" style="margin-bottom: 10%!important;"><img src="images/avatar1.jpg" alt="" sizes="" srcset="" width="100" height="100"></div>
                                    <h4 class="jonimo_text" style="margin-top: 5%!important;">Franck Millo</h4>
                                    <div class="quick_icon" style="margin-top: 5%!important;"><img src="images/quick-icon.png"></div>
                                    <div class="quick_icon_1" style="margin-top: 5%!important;"><img src="images/quick-icon1.png"></div>
                                 </div>
                                 <p class="dummy_text">Deze lening heeft mijn leven gered. Ik leed aan kanker en geen enkele structuur wilde mij een lening geven om mijn chemo te volgen omdat ik volgens haar niet verkoopbaar was. Maar goed, hij heeft me geholpen en dankzij dat heb ik mijn kanker verslagen en gaat het goed met mijn bedrijf.</p>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="testimonial_box">
                                 <div class="jonimo_taital_main">
                                 <div class="quick_icon" style="margin-bottom: 10%!important;"><img src="images/avatar1.jpg" alt="" sizes="" srcset="" width="100" height="100"></div>
                                    <h4 class="jonimo_text" style="margin-top: 5%!important;">Arthur Blaber</h4>
                                    <div class="quick_icon" style="margin-top: 5%!important;"><img src="images/quick-icon.png"></div>
                                    <div class="quick_icon_1" style="margin-top: 5%!important;"><img src="images/quick-icon1.png"></div>
                                 </div>
                                 <p class="dummy_text">Wat kan ik zeggen, behalve dat ze de beste zijn? Ik ben blij en ik raad het aan</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <h1 class="testimonial_taital">Waarom jij niet ?</h1>

                     <p class="testimonial_text">We hadden een klantenkring die erg tevreden was over onze dienstverlening. </p>
                     <div class="testimonial_section_2">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="testimonial_box">
                                 <div class="jonimo_taital_main">
                                 <div class="quick_icon" style="margin-bottom: 10%!important;"><img src="images/avatar1.jpg" alt="" sizes="" srcset="" width="100" height="100"></div>
                                    <h4 class="jonimo_text" style="margin-top: 5%!important;">Mélanie</h4>
                                    <div class="quick_icon" style="margin-top: 5%!important;"><img src="images/quick-icon.png"></div>
                                    <div class="quick_icon_1" style="margin-top: 5%!important;"><img src="images/quick-icon1.png"></div>
                                 </div>
                                 <p class="dummy_text">Ik dacht dat het een structuur was die deze beloften niet nakwam. Maar uiteindelijk zat ik de hele tijd fout. Ze zijn de beste.</p>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="testimonial_box">
                                 <div class="jonimo_taital_main">
                                 <div class="quick_icon" style="margin-bottom: 10%!important;"><img src="images/avatar1.jpg" alt="" sizes="" srcset="" width="100" height="100"></div>
                                    <h4 class="jonimo_text" style="margin-top: 5%!important;">Fawaze</h4>
                                    <div class="quick_icon" style="margin-top: 5%!important;"><img src="images/quick-icon.png"></div>
                                    <div class="quick_icon_1" style="margin-top: 5%!important;"><img src="images/quick-icon1.png"></div>
                                 </div>
                                 <p class="dummy_text">Het geld kwam traag binnen omdat ik niet snel kon reageren op het verzoek van hun team. Maar dat is prima, ik heb de lening kunnen krijgen en ik ben al aan mijn vierde</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- testimonial section end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">

            <div class="footer_section_2">
               <div class="row">
                  <div class="col-lg-4">
                     <h2 class="footer_taital">Over</h2>
                     <p class="footer_text">Wij zijn een microfinancieringsagentschap waarmee individuen een banklening kunnen krijgen om hun levensomstandigheden te verbeteren.</p>
                  </div>
                  <div class="col-lg-4">
                     <h2 class="footer_taital">Klaar, gereed</h2>
                     <p class="footer_text">Ons systeem voor het verkrijgen van een lening is heel eenvoudig vergeleken met de andere structuur.</p>
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
            <p class="copyright_text">Copyright 2019 All Rights Reserved.</p>
         </div>
      </div>
   </div>
   <div id="cookiePopup" class="popup">
      <div class="popup-content">
         <h2>Utilisation des Cookies</h2>
         <p>Nous utilisons des cookies pour améliorer votre expérience sur notre site. En continuant, vous acceptez notre <a href="#">Politique de Confidentialité</a> et notre <a href="#">Utilisation des Cookies</a>.</p>
         <button id="acceptCookies">Accepter</button>
         <i class="fas fa-times close-icon" id="closePopup"></i>
      </div>
   </div>
   <script>
      document.addEventListener('DOMContentLoaded', function() {
         const cookiePopup = document.getElementById('cookiePopup');
         const acceptCookiesButton = document.getElementById('acceptCookies');
         const closePopupIcon = document.getElementById('closePopup');

         // Vérifier si le cookie "acceptedCookies" existe
         const cookiesAccepted = localStorage.getItem('acceptedCookies');

         if (!cookiesAccepted) {
            cookiePopup.style.display = 'flex';
         }

         acceptCookiesButton.addEventListener('click', function() {
            // Enregistrer le consentement dans un cookie
            localStorage.setItem('acceptedCookies', 'true');
            cookiePopup.style.display = 'none';
         });

         closePopupIcon.addEventListener('click', function() {
            cookiePopup.style.display = 'none';
         });
      });
   </script>
   <script>
      const zoomImage = document.querySelector('.zoom-image');

      function handleScroll() {
         const elementTop = zoomImage.getBoundingClientRect().top;

         // You can adjust the value here to control when the animation triggers
         if (elementTop <= window.innerHeight / 2) {
            zoomImage.style.transform = 'scale(1.2)';
         } else {
            zoomImage.style.transform = 'scale(1)';
         }
      }

      window.addEventListener('scroll', handleScroll);
   </script>
   <script>
      const movingImage = document.querySelector('.moving-image');
      let animationStarted3 = false;

      function handleScroll() {
         const imagePosition = movingImage.getBoundingClientRect().left;

         if (imagePosition <= window.innerWidth && !animationStarted3) {
            animationStarted3 = true;
            movingImage.style.left = '0'; // Move image to the center
         }
      }

      window.addEventListener('scroll', handleScroll);
   </script>
   <script>
      const counterElement = document.querySelector('.counter');
      let currentValue = -100;
      let animationStarted = false;

      function updateCounter() {
         currentValue += 1;
         counterElement.textContent = +currentValue + ' % van Tarief';

         if (currentValue < -30) {
            requestAnimationFrame(updateCounter);
         }
      }

      function handleScroll() {
         const elementTop = counterElement.getBoundingClientRect().top;

         if (elementTop <= window.innerHeight && !animationStarted) {
            animationStarted = true;
            updateCounter();
         }
      }

      window.addEventListener('scroll', handleScroll);
   </script>
   <script>
      const counterElement1 = document.querySelector('.count');
      let currentValue1 = 100;
      let animationStarted1 = false;

      function updateCounter1() {
         currentValue1 -= 1;
         counterElement1.textContent = 'N°' + currentValue1 + ' wereldwijd';

         if (currentValue1 > 1) {
            requestAnimationFrame(updateCounter1);
         }
      }

      function handleScroll1() {
         const elementTop1 = counterElement1.getBoundingClientRect().top;

         if (elementTop1 <= window.innerHeight && !animationStarted1) {
            animationStarted1 = true;
            updateCounter1();
         }
      }

      window.addEventListener('scroll', handleScroll1);
   </script>
   <script>
      const counterElement2 = document.querySelector('.count2');
      let currentValue2 = 0;
      let animationStarted2 = false;

      function updateCounter2() {
         currentValue2 += 1;
         counterElement2.textContent = +currentValue2 + 'h/24';

         if (currentValue2 < 24) {
            requestAnimationFrame(updateCounter2);
         }
      }

      function handleScroll2() {
         const elementTop2 = counterElement2.getBoundingClientRect().top;

         if (elementTop2 <= window.innerHeight && !animationStarted2) {
            animationStarted2 = true;
            updateCounter2();
         }
      }

      window.addEventListener('scroll', handleScroll2);
   </script>
   <script type="text/javascript">
      function googleTranslateElementInit() {
         new google.translate.TranslateElement({
            pageLanguage: 'nl'
         }, 'google_translate_element');
      }
   </script>
   <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
   <!-- copyright section end -->
   <!-- Javascript files-->
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