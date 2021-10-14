<?php

include('../components/function.php');

$news_items = getJsonContent('news', 'nl');

?>
<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <?php include_once('../components/head.php') ?>
    <title>Nieuws</title>
</head>

<body class="h-100">
    <?php include_once('../components/header.php') ?>
    <div class="container">
        <div class="row">

            <div class="col-12">
                <h2>Nieuws</h2>
                <?php
                if ($_SESSION['auth'] == "teacher") {
                ?>
                    <a class="btn btn-primary float-right" href="./add-news.php">Nieuws toevoegen</a>
                <?php
                }
                ?>
            </div>
        </div>

        <?php
        foreach ($news_items as $id => $news_item) {
        ?>
            <div class="row mb-2 mt-2">
                <div class="col-12">
                    <div class="card">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <a class="full-link" href="./news-item.php?id=<?=$id?>">
                                    <div class="news-image h-100 w-100">
                                        <div style="background-image: url('../<?= $news_item->image ?>')" class="articleImage h-100 w-100"></div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="news-description card-body">
                                    <h2 class="m-0"><?= $news_item->title ?></h2>
                                    <p class="mt-1 mb-2"><?= $news_item->article ?> <a class="full-link" href="./news-item.php?id=<?=$id?>">lees meer</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>

        <div class="row mb-4">
            <div class="col-12 d-flex justify-content-center">
                <button type="button" class="btn btn-custom">Meer weergeven</button>
            </div>
        </div>
    </div>
    <?php include_once('../components/footer.php') ?>
</body>

</html>