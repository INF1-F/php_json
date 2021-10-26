<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once('../../components/head.php') ?>

    <title>Add News</title>
</head>

<body>
    <?php include_once('../../components/en/header.php') ?>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Add News</h1>
                <p class="text-muted">Every field with a * is required to fill in</p>
            </div>
            <div class="col-12 mb-3 add-news">
                <div class="card align-items">
                    <div class="card-body">
                        <form class="contactForm" action="../../controllers/create_news.php" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="userLang" value="en">
                            <div class="form-row">
                                <label for="lang">
                                    <b>Select a language <sup>*</sup></b>
                                    <?php
                                    //foutmelding als lang leeg is
                                    if (isset($_GET["error"]) && $_GET["error"] == "lang") {
                                    ?>
                                        <span class="error">There is no language selected</span>
                                    <?php
                                    }
                                    ?>
                                </label>
                                <p id="lang">
                                    <label class="radio-label"><input type="radio" name="lang" value="nl" required> Dutch</label>
                                    <label class="radio-label"><input type="radio" name="lang" value="en" checked required> English</label>
                                </p>
                            </div>
                            <div class="form-row">
                                <label for="author">
                                    <b>Author <sup>*</sup></b>
                                    <?php
                                    //foutmelding als author leeg is
                                    if (isset($_GET["error"]) && $_GET["error"] == "author") {
                                    ?>
                                        <span class="error">No author has been entered</span>
                                    <?php
                                    }
                                    ?>
                                </label>
                                <input type="text" id="author" value="<?= $_SESSION['fullName'] ?>" name="author" class="form-control mt-2" placeholder="Type the author" required>
                            </div>
                            <div class="form-row">
                                <label for="title">
                                    <b>Title <sup>*</sup></b>
                                    <?php
                                    //foutmelding als title leeg is
                                    if (isset($_GET["error"]) && $_GET["error"] == "title") {
                                    ?>
                                        <span class="error">Title is not entered correctly</span>
                                    <?php
                                    }
                                    ?>
                                </label>
                                <input type="text" id="title" name="title" class="form-control mt-2" placeholder="Enter here your title" required>
                            </div>
                            <div class="form-row">
                                <label for="image">
                                    <b>Select an image <sup>*</sup></b>
                                    <?php
                                    //foutmelding als img leeg is
                                    if (isset($_GET["error"]) && $_GET["error"] == "img") {
                                    ?>
                                        <span class="error">The image has not the correct size or type</span>
                                    <?php
                                    }
                                    ?>
                                </label>
                                <input type="file" class="d-flex mt-2" id="image" name="image" required>
                            </div>
                            <div class="form-row">
                                <label for="article">
                                    <b>Article <sup>*</sup></b>
                                    <?php
                                    //foutmelding als article leeg is
                                    if (isset($_GET["error"]) && $_GET["error"] == "article") {
                                    ?>
                                        <span class="error">Article is not entered correctly</span>
                                    <?php
                                    }
                                    ?>
                                </label>
                                <textarea id="article" class="form-control mt-2" name="article" style="height: 200px;" placeholder="Enter here your article" required></textarea>
                            </div>
                            <div class="form-row">
                                <input class="float-right btn btn-custom" type="submit" value="Submit">

                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <?php include_once('../../components/en/footer.php') ?>
</body>

</html>