<?php
session_start();
?>
<!DOCTYPE html>
<html lang="nl" class="h-100">

<head>
    <?php include_once('../../components/head.php') ?>
    <title>FAQ</title>
</head>

<body class="h-100">
    <?php include_once('../../components/nl/header.php') ?>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-12">
                <h2>Vaak gestelde vragen</h2>
            </div>
        </div>
        <div class="mt-2 mb-2">
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="dividerLine">
                    <button type="button" class="expandBtn closedContent">Inschrijven, hoe doe ik dat? <span class="material-icons align-middle"></span></button>
                    <div class="expContent">
                        <p class="mt-0"> Je schrijft je in op Studielink, de inschrijfportaal van het miniserie van Onderwijs. Je volgt hiervoor de onderstaande stappen. Ga naar www.studielink.nl en kies voor “Inloggen met DigiD”. Log in met je DigiD gebruikersnaam en wachtwoord. Vul in het volgende scherm jouw persoonsgegevens in. Activeer je account volgens de instructies van Studielink. Kies jouw studie, de startdatum en inschrijfvorm. Geef ook aan of je als eerstejaars of als hogerejaars student start. </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="dividerLine">
                    <button type="button" class="expandBtn closedContent">Studeren, wat kost dat? <span class="material-icons align-middle"></span></button>
                    <div class="expContent">
                        <p class="mt-0"> Het kabinet heeft dit jaar besloten om het wettelijke collegegeld te halveren en vast te stellen op € 1.084. Om studenten enigszins te compenseren voor de verminderde studiemogelijkheden gedurende de Coronaperiode.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="dividerLine">
                    <button type="button" class="expandBtn closedContent">Op jezelf wonen, wat zijn de kosten? <span class="material-icons align-middle"></span></button>
                    <div class="expContent">
                        <p class="mt-0"> Veel studenten kiezen ervoor om tijdens hun studie op zichzelf te gaan wonen. Een eigen studio, appartement of een gezellige kamer in een studentenhuis, er is keuze genoeg. De huur die je betaalt voor je eigen plekje verschilt per locatie. De huur is niet de enige uitgave die je doet wanneer je op jezelf woont. Je gaat ook je eigen boodschappen doen. Het Nibud stelt dat studenten gemiddeld €161 euro per maand kwijt zijn aan boodschappen. Dit is een gemiddelde, het echte bedrag verschilt natuurlijk per persoon.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-12">
                <button type="button" class="expandBtn closedContent">Studeren met een functiebeperking, wat zijn de mogelijkheden? <span class="material-icons align-middle"></span></button>
                <div class="expContent">
                    <p class="mt-0"> Bespreek de mogelijkheden met een studentendecaan. Deze zijn te vinden op ons decanaat.</p>
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
    <?php include_once('../../components/nl/footer.php') ?>
</body>

</html> 