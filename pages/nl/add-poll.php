<?php
session_start();
?>
<!DOCTYPE html>
<html lang="nl">

<head>
    <?php include_once('../../components/head.php') ?>

    <title>Voeg een poll toe</title>
</head>

<body>
    <?php include_once('../../components/nl/header.php') ?>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Voeg een poll toe</h1>
            </div>
            <div class="col-12 mb-3 add-news">
                <div class="card align-items">
                    <div class="card-body">
                        <form class="contactForm" action="../../controllers/create_poll.php" method="POST">
                            <input type="hidden" name="userLang" value="nl">
                            <div class="form-row">
                                <p class="mt-0 reqFieldText"><span class="reqField">*</span> Verplichte velden</p>
                            </div>
                            <div class="form-row">
                                <label for="lang">
                                    <b>Selecteer de taal van uw poll <span class="reqField">*</span></b>
                                    <?php
                                    //foutmelding als lang leeg is
                                    if (isset($_GET["error"]) && $_GET["error"] == "lang") {
                                    ?>
                                    <span class="error">Er is geen taal geselecteerd</span>
                                    <?php
                                    }
                                    ?>
                                </label>
                                <p id="lang">
                                    <label class="radio-label"><input type="radio" name="lang" value="nl" checked required> Nederlands</label>
                                    <label class="radio-label"><input type="radio" name="lang" value="en" required> Engels</label>
                                </p>
                            </div>
                            <div class="form-row">
                                <label for="title">
                                    <b>Vervaldatum <span class="reqField">*</span></b>
                                    <?php
                                    //foutmelding als title leeg is
                                    if (isset($_GET["error"]) && $_GET["error"] == "date") {
                                    ?>
                                    <span class="error">Verloopdatum is niet ingevuld</span>
                                    <?php
                                    }
                                    ?>
                                </label>
                                <input type="date" id="date" name="expire_date" class="form-control mt-2" required>
                            </div>
                            <div class="form-row">
                                <label for="title">
                                    <b>Titel <span class="reqField">*</span></b>
                                    <?php
                                    //foutmelding als title leeg is
                                    if (isset($_GET["error"]) && $_GET["error"] == "title") {
                                    ?>
                                    <span class="error">Titel niet correct ingevuld</span>
                                    <?php
                                    }
                                    ?>
                                </label>
                                <input type="text" id="title" name="title" class="form-control mt-2" placeholder="Typ hier uw titel" required>
                            </div>
                            <div class="form-row">
                                <label for="article">
                                    <b>Beschrijving van uw poll <span class="reqField">*</span></b>
                                    <?php
                                    //foutmelding als omschrijving leeg is
                                    if (isset($_GET["error"]) && $_GET["error"] == "description") {
                                    ?>
                                        <span class="error">De omschrijving is niet correct ingevuld</span>
                                    <?php
                                    }
                                    ?>
                                </label>
                                <textarea id="article" class="form-control mt-2" name="description" style="height: 200px;" placeholder="Typ hier uw omschrijving" required></textarea>
                            </div>
                            <div class="form-row">
                                <label for="anwser1">
                                    <b>Antwoord optie 1<span class="reqField">*</span></b>
                                    <?php
                                    //foutmelding als antwoord 1 leeg is
                                    if (isset($_GET["error"]) && $_GET["error"] == "answer1") {
                                    ?>
                                    <span class="error">Antwoord 1 niet correct ingevuld</span>
                                    <?php
                                    }
                                    ?>
                                </label>
                                <input type="text" id="anwser1" name="anwser1" class="form-control mt-2" placeholder="Typ hier uw antwoord" required>
                            </div>
                            <div class="form-row">
                                <label for="anwser2">
                                    <b>Antwoord optie 2<span class="reqField">*</span></b>
                                    <?php
                                    //foutmelding als antwoord 2 leeg is
                                    if (isset($_GET["error"]) && $_GET["error"] == "answer2") {
                                    ?>
                                    <span class="error">Antwoord 2 niet correct ingevuld</span>
                                    <?php
                                    }
                                    ?>
                                </label>
                                <input type="text" id="anwser2" name="anwser2" class="form-control mt-2" placeholder="Typ hier uw antwoord" required>
                            </div>
                            <div class="form-row">
                                <input class="float-right btn btn-custom" type="submit" value="Versturen">

                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <?php include_once('../../components/nl/footer.php') ?>
</body>

</html>