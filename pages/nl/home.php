<?php
session_start();
include('../../components/function.php');

$news_items = getJsonContent('news', 'nl');
$polls = getJsonContent('poll', 'nl');
$current_poll = $polls->{array_keys((array) $polls)[0]};
$current_poll_id = array_keys((array) $polls)[0];
?>
<!DOCTYPE html>
<html lang="nl" class="h-100">

<head>
    <?php include_once('../../components/head.php') ?>
    <title>Voorpagina</title>
</head>

<body>
    <?php include_once('../../components/nl/header.php') ?>
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex h-100">
                <h2>Nieuwste poll</h2>
                <?php
                if ($_SESSION['auth'] == "teacher") {
                ?>
                    <div class="col-10 my-auto">
                        <!-- Als het ingelogde persoon een leraar is, laat de 'nieuws toevoegen' knop zien. -->
                        <a class="btn btn-custom float-right" href="./create-poll.php">Poll toevoegen</a>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
        <div class="row mb-2 mt-2">
            <div class="col-12">
                <h3><?= $current_poll->title ?></h3>
                <?php
                if (isset($_COOKIE['poll_id']) && $_COOKIE['poll_id'] == $current_poll_id) {
                    foreach ($current_poll->questions as $key => $question) {
                ?>
                        <p><?= $key . ': ' . round($question / array_sum((array) $current_poll->questions) * 100, 1) ?>%</p>
                    <?php
                    }
                } else {
                    ?>
                    <form action="../../controllers/answer_poll.php" method="POST">

                        <input type="hidden" name="userLang" value="nl">
                        <input type="hidden" name="id" value="<?= $current_poll_id ?>">
                        <div class="row">
                            <?php
                            foreach ($current_poll->questions as $key => $question) {
                            ?>
                                <div class="col-12">
                                    <input onchange="this.form.submit();" type="radio" id="<?= $key ?>" name="question" value="<?= $key ?>">
                                    <label for="<?= $key ?>"><?= $key ?></label>
                                </div>
                            <?php
                            }

                            ?>

                        </div>

                    </form>
                <?php
                }
                ?>
            </div>
        </div>

        <div class="row">
            <div class="col-12 d-flex h-100">
                <h2>Laatste nieuws</h2>
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
            <h3 class="text-center">Er zijn momenteel geen nieuws artikelen beschikbaar</h3>
        <?php
        }
        ?>

        <div class="row mb-2 mt-2">
            <div class="col-12 d-flex justify-content-center">
                <a href="./news.php" class="btn btn-custom hoverUnderline">Bekijk meer</a>
            </div>
        </div>
    </div>
    </div>

    <?php include_once('../../components/nl/footer.php') ?>
</body>

</html>