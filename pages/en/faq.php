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
                <h2>Frequently asked questions</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="dividerLine">
                    <button type="button" class="expandBtn closedContent">Question 1 <span class="material-icons align-middle"></span></button>
                    <div class="expContent">
                        <p class="mt-0"> Question 1 | Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="dividerLine">
                    <button type="button" class="expandBtn closedContent">Question 2 <span class="material-icons align-middle"></span></button>
                    <div class="expContent">
                        <p class="mt-0"> Question 2 | Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="dividerLine">
                    <button type="button" class="expandBtn closedContent">Question 3 <span class="material-icons align-middle"></span></button>
                    <div class="expContent">
                        <p class="mt-0"> Question 3 | Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="dividerLine">
                    <button type="button" class="expandBtn closedContent">Question 4 <span class="material-icons align-middle"></span></button>
                    <div class="expContent">
                        <p class="mt-0"> Question 4 | Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
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