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
                    <a class="nav-link" href="/home">Startpagina</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">Over ons</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/services">Hoe het werkt</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/compte">Een lening afsluiten</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                </li>
            </ul>
            <div class="seemore_bt" style="width: 100px !important;height: 30px !important;"><a href="/compte">Mijn account</a></div>



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
<?php
}
?>