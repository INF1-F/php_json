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
                <h1>Add a poll</h1>
                <p class="text-muted">Everything with a * is required to fill in</p>
            </div>
            <div class="col-12 mb-3 add-news">
                <div class="card align-items">
                    <div class="card-body">
                        <form class="contactForm" action="../../controllers/create_poll.php" method="POST">
                            <input type="hidden" name="userLang" value="en">
                            <div class="form-row">
                                <label for="lang">
                                    <b>Select a language <sup>*</sup></b>
                                    <?php
                                    //foutmelding als lang leeg is
                                    if (isset($_GET["error"]) && $_GET["error"] == "lang") {
                                    ?>
                                    <span class="error">No language is selected</span>
                                    <?php
                                    }
                                    ?>
                                </label>
                                <p id="lang">
                                    <label class="radio-label"><input type="radio" name="lang" value="nl" checked required> Dutch</label>
                                    <label class="radio-label"><input type="radio" name="lang" value="en" required> English</label>
                                </p>
                            </div>
                            <div class="form-row">
                                <label for="title">
                                    <b>Expiration date <sup>*</sup></b>
                                    <?php
                                    //foutmelding als title leeg is
                                    if (isset($_GET["error"]) && $_GET["error"] == "date") {
                                    ?>
                                    <span class="error">Expiration date has not been entered</span>
                                    <?php
                                    }
                                    ?>
                                </label>
                                <input type="date" id="date" name="expire_date" class="form-control mt-2" required>
                            </div>
                            <div class="form-row">
                                <label for="title">
                                    <b>Title <sup>*</sup></b>
                                    <?php
                                    //foutmelding als title leeg is
                                    if (isset($_GET["error"]) && $_GET["error"] == "title") {
                                    ?>
                                    <span class="error">Title not filled in correctly</span>
                                    <?php
                                    }
                                    ?>
                                </label>
                                <input type="text" id="title" name="title" class="form-control mt-2" placeholder="Enter your title here" required>
                            </div>
                            <div class="form-row">
                                <label for="article">
                                    <b>Description <sup>*</sup></b>
                                    <?php
                                    //foutmelding als omschrijving leeg is
                                    if (isset($_GET["error"]) && $_GET["error"] == "description") {
                                    ?>
                                        <span class="error">The description has not been entered correctly</span>
                                    <?php
                                    }
                                    ?>
                                </label>
                                <textarea id="article" class="form-control mt-2" name="description" style="height: 200px;" placeholder="Type your description here" required></textarea>
                            </div>
                            <div class="form-row">
                                <label for="anwser1">
                                    <b>Answer 1 <sup>*</sup></b>
                                    <?php
                                    //foutmelding als antwoord 1 leeg is
                                    if (isset($_GET["error"]) && $_GET["error"] == "answer1") {
                                    ?>
                                    <span class="error">Answer 1 not filled in correctly</span>
                                    <?php
                                    }
                                    ?>
                                </label>
                                <input type="text" id="anwser1" name="anwser1" class="form-control mt-2" placeholder="Type your answer here" required>
                            </div>
                            <div class="form-row">
                                <label for="anwser2">
                                    <b>Answer 2 <sup>*</sup></b>
                                    <?php
                                    //foutmelding als antwoord 2 leeg is
                                    if (isset($_GET["error"]) && $_GET["error"] == "answer2") {
                                    ?>
                                    <span class="error">Answer 2 not filled in correctly</span>
                                    <?php
                                    }
                                    ?>
                                </label>
                                <input type="text" id="anwser2" name="anwser2" class="form-control mt-2" placeholder="Type your answer here" required>
                            </div>
                            <div class="form-row">
                                <input class="float-right btn btn-custom" type="submit" value="Send">

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