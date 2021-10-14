<!DOCTYPE html>
<html lang="nl" class="h-100">

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
                    <a class="btn btn-primary float-right" href="./news-add.php">Nieuws toevoegen</a>
                <?php
                }
                ?>
            </div>
        </div>
        <div class="row mb-2 mt-2">
            <div class="col-12">
                <div class="card">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="news-image h-100 w-100">
                                <div style="background-image: url('../assets/img/news_items/NHLStendenEmmen.jpg')" class="articleImage h-100 w-100"></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 paddingLeftClear">
                            <div class="news-description card-body">
                                <h2 class="m-0">Titel</h2>
                                <p class="mt-1 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec iaculis massa,
                                    non rhoncus enim. Sed tristique blandit odio dignissim tempor. Suspendisse at
                                    lorem ex. Pellentesque ornare elit nulla, id ultrices magna venenatis a.
                                    Quisque consequat dolor ante, semper cursus lacus gravida vitae. Aliquam mattis
                                    purus enim. Morbi laoreet vitae risus ac sodales. Aenean rutrum, neque porttitor
                                    euismod pulvinar, sem lacus posuere tellus, eu finibus orci metus quis diam.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-2 mt-2">
            <div class="col-12">
                <div class="card">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="news-image h-100 w-100">
                                <div style="background-image: url('../assets/img/news_items/NHLStendenEmmen.jpg')" class="articleImage h-100 w-100"></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 paddingLeftClear">
                            <div class="news-description card-body">
                                <h2 class="m-0">Titel</h2>
                                <p class="mt-1 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec iaculis massa,
                                    non rhoncus enim. Sed tristique blandit odio dignissim tempor. Suspendisse at
                                    lorem ex. Pellentesque ornare elit nulla, id ultrices magna venenatis a.
                                    Quisque consequat dolor ante, semper cursus lacus gravida vitae. Aliquam mattis
                                    purus enim. Morbi laoreet vitae risus ac sodales. Aenean rutrum, neque porttitor
                                    euismod pulvinar, sem lacus posuere tellus, eu finibus orci metus quis diam.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-12 d-flex justify-content-center">
                <button type="button" class="btn btn-custom">Meer weergeven</button>
            </div>
        </div>
    </div>
    <?php include_once('../components/footer.php') ?>
</body>

</html>