<?php
session_start();
include('../../components/function.php');

$news_items = getJsonContent('news', 'nl');
$polls = getJsonContent('poll', 'nl');
if (isset($_COOKIE['answerd_polls'])) {
    $answerd_polls = json_decode($_COOKIE['answerd_polls']);
    printArray($answerd_polls);
}else {
    $answerd_polls = array(0);
}

?>
<!DOCTYPE html>
<html lang="nl" class="h-100">

<head>
    <?php include_once('../../components/head.php') ?>
    <title>Voorpagina</title>
</head>

<body>
    <?php include_once('../../components/nl/header.php') ?>
    <div class="container h-100">
        <div class="row">
            <div class="col-12 d-flex h-100">
                <h2>Polls</h2>
            </div>
            <?php
            foreach ($polls as $key => $poll) {
            ?>
                <form action="../../controllers/answer_poll.php" method="POST">
                <h4><?= $poll->question ?></h4>
                    <?php
                        // foreach ($answerd_polls as $answerd_poll) {
                            for($i = 0; $i < count($answerd_polls); $i++){
                            if ($answerd_polls[$i] == $key) {
                            ?>
                            <p>Ja: <?= round($poll->answers->true / ($poll->answers->true + $poll->answers->false) * 100, 1) ?></p>
                            <p>Nee: <?= round($poll->answers->false / ($poll->answers->true + $poll->answers->false) * 100, 1) ?></p>
                            <?php
                            } else {
                            ?>
                                <input type="hidden" name="userLang" value="nl">
                                <input type="hidden" name="id" value="<?= $key ?>">
                                <label for="true">Ja </label>
                                <input onchange="this.form.submit();" type="radio" id="true" name="answer" value="true">
                                <label for="false">Nee</label>
                                <input onchange="this.form.submit();" type="radio" name="answer" value="false">
                    <?php
                            }
                    }
                    ?>

                </form>
            <?php
            }
            ?>
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
    <?php include_once('../../components/nl/footer.php') ?>
</body>

</html>