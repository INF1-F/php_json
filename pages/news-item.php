<?php
include('../components/function.php');

$news_items = getJsonContent('news', 'nl');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $news_item = $news_items->$id;
    if (!$news_item) {
        header('Location: ./news.php');
    }
} else {
    header('Location: ./news.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once('../components/head.php') ?>
    <title><?= $news_item->title ?></title>
</head>

<body>
    <?php include_once('../components/header.php') ?>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1><?= $news_item->title ?></h1>
            </div>
            <div class="col-12 col-md-6">
                <img src="../<?= $news_item->image ?>" class="image-fluid" alt="niews foto">
                <div class="news-author">
                    <h4><?= $news_item->author ?></h4>
                </div>
                <div class="news-text mb-3">
                    <?= nl2br($news_item->article) ?>
                </div>
                
            </div>
            <div class="col-12 col-md-6">
                <h3 class="mt-0">Geef een reatie</h3> <!-- geplaatste reacties-->
                <div class="card mb-2">
                    <div class="card-body">
                        <h5 class="reaction-name">Voornaam achternaam:</h5><span class="reaction-date">06-10-2021</span>
                        <div class="reaction">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In at finibus ante. Praesent eu arcu ut neque dapibus eleifend. Nulla vel velit felis. Nunc lacinia turpis diam, vel tincidunt justo congue at. Praesent vel odio enim. Etiam non ante eget ipsum dignissim faucibus non vel nisi. Nulla gravida ultrices
                        </div>
                    </div>
                </div>
                <div class="card mb-2">
                    <div class="card-body">
                        <h5 class="reaction-name">Voornaam achternaam:</h5><span class="reaction-date">06-10-2021</span>
                        <div class="reaction">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In at finibus ante. Praesent eu arcu ut neque dapibus eleifend. Nulla vel velit felis. Nunc lacinia turpis diam, vel tincidunt justo congue at. Praesent vel odio enim. Etiam non ante eget ipsum dignissim faucibus non vel nisi. Nulla gravida ultrices
                        </div>
                    </div>
                </div>

                <!-- reactie typen -->
                <h3 class="mt-3">Schrijf uw reactie</h3>
                <form action="../controllers/create_reaction.php" class="reactionForm" method="post">
                    <input type="hidden" name="id" value="<?= $id ?>">
                    <input type="hidden" name="author" value="<?= $_SESSION['fullName']?>">
                    <textarea class="form-control" name="reaction"></textarea>
                    <input type="submit" class="btn btn-custom mt-2" height="80" value="Versturen">
                </form>
            </div>
        </div>
    </div>
    <?php include_once('../components/footer.php') ?>
</body>

</html>