<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <?php include_once('../../components/head.php') ?>
    <title>FAQ</title>
</head>

<body class="h-100">
    <?php include_once('../../components/en/header.php') ?>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-12">
                <h1>Frequently asked questions</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="dividerLine">
                    <button type="button" class="expandBtn closedContent">Registering, how do I do that? <span class="material-icons align-middle"></span></button>
                    <div class="expContent">
                        <p class="mt-0">You register on Studielink, the registration portal of the Education miniseries. To do this, follow the steps below. Go to www.studielink.nl and choose “Log in with DigiD”. Log in with your DigiD username and password. Enter your personal details in the next screen. Activate your account according to the instructions of Studielink. Choose your study, the start date and registration form. Also indicate whether you are starting as a first-year or higher-year student. </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="dividerLine">
                    <button type="button" class="expandBtn closedContent">Studying, what does it cost? <span class="material-icons align-middle"></span></button>
                    <div class="expContent">
                        <p class="mt-0">The cabinet has decided this year to halve the statutory tuition fee and set it at €1,084. To compensate students somewhat for the reduced study opportunities during the Corona period. </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="dividerLine">
                    <button type="button" class="expandBtn closedContent">Living on your own, what are the costs? <span class="material-icons align-middle"></span></button>
                    <div class="expContent">
                        <p class="mt-0">Many students choose to live on their own during their studies. Your own studio, apartment or a cozy room in a student house, there is plenty of choice. The rent you pay for your own spot varies per location. Rent isn't the only expense you make when you live on your own. You will also do your own shopping. Nibud states that students spend an average of €161 per month on groceries. This is an average, the real amount varies per person of course. </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="dividerLine">
                    <button type="button" class="expandBtn closedContent">Studying with a disability, what are the options? <span class="material-icons align-middle"></span></button>
                    <div class="expContent">
                        <p class="mt-0">Discuss the options with a student counselor. These can be found at our dean's office. </p>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            //array van alle elementen met de class expandBtn
            var expBtns = document.getElementsByClassName("expandBtn");
            //array expBtns gaat door de for-loop
            for (var i = 0; i < expBtns.length; i++) {
                //voegt een clickevent toe aan de huidige expBtns
                //clickevent: als erop geklikt wordt, voer aangegeven functie uit
                expBtns[i].addEventListener("click", function() {
                    //haalt de tekst op van het dropdownmenu vraag-antwoord door de sibling erna te pakken
                    var content = this.nextElementSibling;
                    //if: Als hij aan is, zet hem uit.
                    //Else: Als hij uit is, zet hem aan.
                    //Gedaan met display block.
                    if (content.style.display === "block") {
                        content.style.display = "none";
                        // zorgen voor de correcte dropdown pijltjes
                        this.classList.add("closedContent");
                        this.classList.remove("openedContent");
                    } else {
                        content.style.display = "block";
                        //zorgen voor de correcte dropdown pijltjes
                        this.classList.add("openedContent");
                        this.classList.remove("closedContent");
                    }
                });
            }
        </script>
    </div>
    <?php include_once('../../components/en/footer.php') ?>
</body>

</html> 