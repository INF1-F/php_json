<?php
include('../../components/function.php');

$news_items = getJsonContent('news', 'en');


?>
<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <?php include_once('../../components/head.php') ?>
    <title>Home</title>
</head>

<body>
    <?php include_once('../../components/en/header.php') ?>
    <div class="container h-100">
        <div class="row">
            <div class="col-12 d-flex h-100">
                <h2>Latest news</h2>
            </div>
        </div>
        <?php
        if (!empty($news_items)) {
            $i = 0;
            foreach ($news_items as $key => $news_item) {
                if ($i < 2) {
        ?>
                    <div class="row mb-2 mt-2">
                        <div class="col-12">
                            <div class="card news-card">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <a class="full-link" href="./news-item.php?id=<?= $key ?>">
                                            <div class="news-image h-100 w-100">
                                                <div style="background-image: url('../../<?= $news_item->image ?>')" class="articleImage h-100 w-100"></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="card-body">
                                            <h2 class="m-0"><?= $news_item->title ?></h2>
                                            <a class="full-link color-black" href="./news-item.php?id=<?= $key ?>">
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
        <?php
        } else {
        ?>
            <h3 class="text-center">There are currently no news articles available</h3>
        <?php
        }
        ?>

        <div class="row mb-2 mt-2">
            <div class="col-12 d-flex justify-content-center">
                <a href="./news.php" class="btn btn-custom">View more</a>
            </div>
        </div>
    </div>
    <?php include_once('../../components/en/footer.php') ?>
</body>

</html>