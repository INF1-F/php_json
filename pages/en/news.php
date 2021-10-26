<?php

include('../../components/function.php');

$news_items = getJsonContent('news', 'en');

$counter = 3;
$i = 0;

if (isset($_POST['counter']) && !empty($_POST['counter'])) {
    $counter += $_POST['counter'];
}
?>
<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <?php include_once('../../components/head.php') ?>
    <title>News</title>
</head>

<body class="h-100">
    <?php include_once('../../components/en/header.php') ?>
    <div class="container">
        <div class="row">

            <div class="col-12">
                <h2>News</h2>
                <?php
                if ($_SESSION['auth'] == "teacher") {
                ?>
                    <a class="btn btn-custom float-right" href="./add-news.php">Add News</a>
                <?php
                }
                ?>
            </div>
        </div>

        <?php
        if (isset($news_items)) {
            foreach ($news_items as $id => $news_item) {
                if ($i < $counter) {
        ?>
                    <div class="row mb-2 mt-2">
                        <div class="col-12">
                            <div class="card news-card">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <a class="full-link" href="./news-item.php?id=<?= $id ?>">
                                            <div class="news-image h-100 w-100">
                                                <div style="background-image: url('../../<?= $news_item->image ?>')" class="articleImage h-100 w-100"></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="card-body">
                                            <h2 class="m-0"><?= $news_item->title ?></h2>
                                            <a class="full-link color-black" href="./news-item.php?id=<?= $id ?>">
                                                <p class="news-description mt-1 mb-2"><?= $news_item->article ?></p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php
                }
                $i++;
            }
            ?>
            <div class="hidden" id="bottom"></div>

            <?php
            if (count((array) $news_items) > 3) {
                if ($counter < $i) {

            ?>
                    <div class="row mb-4" id="bottom">
                        <div class="col-12 d-flex justify-content-center">
                            <form action="news.php#bottom" method="POST">
                                <input type="hidden" value="<?= $counter ?>" name="counter">
                                <button type="submit" class="btn btn-custom">Show more</button>
                            </form>
                        </div>
                    </div>
            <?php
                }
            }
        } else {
            ?>
            <h3 class="text-center">There are currently no news articles available</h3>
        <?php
        }
        ?>

    </div>
    <?php include_once('../../components/en/footer.php') ?>
</body>

</html>