<?php
session_start();
?>
<!DOCTYPE html>
<html lang="nl">

<head>
    <?php include_once('../../components/head.php') ?>

    <title>Voeg nieuws toe</title>
</head>

<body>
    <?php include_once('../../components/nl/header.php') ?>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Voeg nieuws toe</h1>
                <p class="text-muted">Alles met een * is verplicht om in te vullen</p>
            </div>
            <div class="col-12 mb-3 add-news">
                <div class="card align-items">
                    <div class="card-body">
                        <form class="contactForm" action="../../controllers/create_news.php" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="userLang" value="nl">
                            <div class="form-row">
                                <label for="lang">
                                    <b>Selecteer een taal <sup>*</sup></b>
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
                                <label for="author">
                                    <b>Auteur <sup>*</sup></b>
                                    <?php
                                    //foutmelding als author leeg is
                                    if (isset($_GET["error"]) && $_GET["error"] == "author") {
                                    ?>
                                    <span class="error">Er is geen auteur ingevuld</span>
                                    <?php
                                    }
                                    ?>
                                </label>
                                <input type="text" id="author" value="<?= $_SESSION['fullName'] ?>" name="author" class="form-control mt-2" placeholder="Typ de auteur" required>
                            </div>
                            <div class="form-row">
                                <label for="title">
                                    <b>Titel <sup>*</sup></b>
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
                                <label for="image">
                                    <b>Selecteer een afbeelding <sup>*</sup></b>
                                    <?php
                                    //foutmelding als img leeg is
                                    if (isset($_GET["error"]) && $_GET["error"] == "img") {
                                    ?>
                                    <span class="error">De afbeelding is niet van correct formaat of type</span>
                                    <?php
                                    }
                                    ?>
                                </label>
                                <input type="file" class="d-flex mt-2" id="image" name="image" required>
                            </div>
                            <div class="form-row">
                                <label for="article">
                                    <b>Artikel <sup>*</sup></b>
                                    <?php
                                    //foutmelding als article leeg is
                                    if (isset($_GET["error"]) && $_GET["error"] == "article") {
                                    ?>
                                    <span class="error">Het artikel is niet correct ingevuld</span>
                                    <?php
                                    }
                                    ?>
                                </label>
                                <textarea id="article" class="form-control mt-2" name="article" style="height: 200px;" placeholder="Typ hier uw artikel" required></textarea>
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