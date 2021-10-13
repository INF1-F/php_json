<!DOCTYPE html>
<html lang="en">
<head>
    <?php  include_once('../components/head.php')?>

    <title>Voeg nieuws toe</title>
</head>
<body>
    <?php include_once('../components/header.php')?>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Voeg nieuws toe</h1>
            </div>
            <div class="col-12 mb-3 add-news">
                <div class="card align-items">
                    <div class="card-body">
                        <form class="contactForm" action="news.php" method="POST" enctype="multipart/form-data">
                            <div class="form-row">
                                <label for="title"><b>Titel</b></label>
                                <input type="text" id="title" name="title" class="form-control" placeholder="Typ hier uw titel">
                            </div>
                            <div class="form-row">
                                <label for="file"><b>Selecteer een afbeelding:</b></label>
                                <input type="file" class="form-control" id="file" name="file">
                            </div>
                            <div class="form-row">
                                <label for="article"><b>Artikel</b></label>
                                <textarea id="article" class="form-control" name="article" style="height: 200px;" placeholder="Typ hier uw artikel"></textarea>
                            </div>
                            <div class="form-row">
                            </div>
                        </form>
                    </div>
                </div>
                <input class="float-right btn btn-primary" type="submit" value="Versturen">

            </div>
        </div>
    </div>

    <?php include_once('../components/footer.php')?>
</body>
</html>