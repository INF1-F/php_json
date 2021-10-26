
<header>
    <div class="container">
        <div class="row">
<!--        Dit is het linkerdeel van de header voor laptopformaat en groter-->
            <div class="col-lg-5 col-4 d-none d-lg-block">
                <nav>
                    <ul class="d-flex list-unstyled align-items-center">
                        <li><a href="home.php"><img src="../../assets/img/Stenden_logo_wit.svg" alt="Het logo van Stenden"></a></li>
                        <li class="header-link d-flex align-items-center justify-content-center"><a href="./news.php">Nieuws</a></li>
                        <li class="header-link d-flex align-items-center justify-content-center"><a href="./faq.php">FAQ</a></li>
                        <li class="header-link d-flex align-items-center justify-content-center"><a href="./contact-choise.php">Contact</a></li>
                    </ul>
                </nav>
            </div>
<!--        Dit is het linkerdeel van de header voor alles kleiner van laptopformaat, dus telefoon en tablet-->
            <div class="col-lg-5 col-4 d-lg-none">
                <div class="menu-toggle">
                    <div class="MobileTopLogo"><img id="MobilePlatformLogo" class="d-flex" src="../../assets/img/Logo_footer_white.svg" alt="Logo van de site in wit" onclick="openNav()" ></div>
                    <div id="mySidenav" class="sidenav">
                        <div class="mobileMenu">
                            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><img class="d-flex" src="../../assets/img/Logo.svg" alt="Logo site kleur"></a>
                            <a href="news.php">Nieuws</a>
                            <hr class="MenuLine">
                            <a href="contact-choise.php">Contact</a>
                            <hr class="MenuLine">
                            <a href="faq.php">FAQ</a>
                            <hr class="MenuLine">
                            <a href="#">Uitloggen</a> <br />
                            <div class="MobileBottomLogo">
                                <img src="../../assets/img/Stenden_logo_blauw.svg" alt="Stenden logo blauw" id="MobileStendenLogo">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!--        Dit is het midden van de header voor laptopformaat en groter-->
            <div class="col-lg-2 col-4 justify-content-center d-lg-flex align-items-center d-none">
                <div class="round justify-content-center align-items-center d-flex">
                    <a href="./home.php"><img src="../../assets/img/logo.svg" alt="Logo van de site" class="main-logo"></a>
                </div>
            </div>
<!--        Dit is het midden van de header voor telefoon en tablet-->
            <div class="col-lg-2 col-4 d-flex justify-content-center d-lg-none">
                <img src="../../assets/img/Stenden_logo_wit.svg" alt="Het logo van Stenden">
            </div>
<!--        Dit is het rechterdeel van de header voor laptopformaat en groter-->
            <div class="col-lg-5 col-4 d-none d-lg-block">
                <ul class="d-flex justify-content-right list-unstyled align-items-center">
                    <li class="header-link d-flex align-items-center justify-content-center">
                        <form action="../../index.php" method="post">
                            <button type="submit" class="button logOut" name="logoff">Uitloggen</button>
                        </form>
                    </li>
                    <li class="header-link d-flex align-items-center justify-content-center"><a class="underline" href="../nl/home.php">NL</a>/<a href="../en/home.php">EN</a></li>
                </ul>
            </div>
<!--        Dit is het rechterdeel van de header voor kleiner dan laptopformaat, dus telefoon en tablet-->
            <div class="col-lg-5 col-4 d-lg-none d-flex align-items-center justify-content-center">
                <a href="../pages/nl/home.php">NL</a>/<a href="../pages/en/home.php">EN</a>
            </div>
        </div>
    </div>
</header>

<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
</script>
<div class="hero">

</div>
