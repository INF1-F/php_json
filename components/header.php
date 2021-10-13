<?php
session_start();
?>
<header>
    <div class="container">
        <div class="row">
<!--        Dit is het linkerdeel van de header voor laptopformaat en groter-->
            <div class="col-lg-5 col-4 d-none d-lg-block">
                <nav>
                    <ul class="d-flex list-unstyled align-items-center">
                        <li><a href="home.php"><img src="../assets/img/Stenden_logo_wit.svg" alt="Het logo van Stenden"></a></li>
                        <li class="header-link d-flex align-items-center justify-content-center"><a href="news.php">Nieuws</a></li>
                        <li class="header-link d-flex align-items-center justify-content-center"><a href="faq.php">FAQ</a></li>
                        <li class="header-link d-flex align-items-center justify-content-center"><a href="contact-choise.php">Contact</a></li>
                    </ul>
                </nav>
            </div>
<!--        Dit is het linkerdeel van de header voor alles kleiner van laptopformaat, dus telefoon en tablet-->
            <div class="col-lg-5 col-4 d-lg-none">
                <div class="menu-toggle">
                    <img class="d-flex" src="../assets/img/Logo_footer_white.svg" alt="Logo van de site in wit" style="height: 55px;">
                    <span class="d-flex">MENU</span>
                </div>
            </div>
<!--        Dit is het midden van de header voor laptopformaat en groter-->
            <div class="col-lg-2 col-4 justify-content-center d-lg-flex align-items-center d-none">
                <div class="round justify-content-center align-items-center d-flex">
                    <a href="./home.php"><img src="../assets/img/logo.svg" alt="Logo van de site" class="main-logo"></a>
                </div>
            </div>
<!--        Dit is het midden van de header voor telefoon en tablet-->
            <div class="col-lg-2 col-4 d-flex justify-content-center d-lg-none">
                <img src="../assets/img/Stenden_logo_wit.svg" alt="Het logo van Stenden">
            </div>
<!--        Dit is het rechterdeel van de header voor laptopformaat en groter-->
            <div class="col-lg-5 col-4 d-none d-lg-block">
                <ul class="d-flex justify-content-right list-unstyled align-items-center">
                    <li class="header-link d-flex align-items-center justify-content-center">
                        <form action="./../index.php" method="post">
                            <button type="submit" name="logoff">Uitloggen</button>
                        </form>
                    </li>
                    <li class="header-link d-flex align-items-center justify-content-center"><a href="#">NL</a>/<a href="#">EN</a></li>
                </ul>
            </div>
<!--        Dit is het rechterdeel van de header voor kleiner dan laptopformaat, dus telefoon en tablet-->
            <div class="col-lg-5 col-4 d-lg-none d-flex align-items-center justify-content-center">
                <a href="#">NL</a>/<a href="#">EN</a>
            </div>
        </div>
    </div>
</header>
