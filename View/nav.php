<?php
if ($_SESSION['user_id']) {
?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="logo"><a href="/home"><img src="images/logo.png"></a></div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/home">Acceuil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">A Propos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/services">Comment ça marche ?</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/compte">Faire un Prêt</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contactez-nous</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                </li>
            </ul>
            <div class="seemore_bt" style="width: 100px !important;height: 30px !important;"><a href="/compte">Mon Compte</a></div>



        </div>
    </nav>
<?php
} else {
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="logo"><a href="/"><img src="images/logo.png"></a></div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                     <a class="nav-link" href="/">Acceuil</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#about">A Propos</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#service">Comment ça marche ?</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#contact">Contact</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="/login">Connexion</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="/register">Inscription</a>
                  </li>
               </ul>
                
               
            </div>
         </nav>
<?php
}
?>