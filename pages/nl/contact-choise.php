<!DOCTYPE html>
<html lang="nl">
    <head>
        <?php include_once('../../components/head.php') ?>
        <title>Contact keuze</title>
    </head>

<body>
    <?php include_once('../../components/nl/header.php')?>

    <div class="container">
        <div class="row">
            <div class="col-12 contact-title">
                <h2>Contact</h2>
            </div>
            <div class="col-12 col-md-4 mb-3 text-center">
                <div class="card justify-content-center card-form">
                    <div class="card-body">
                        <h2 class="contact-title hoverUnderline"><a class="full-link" href="./form.php?choise=0">Klachten</a></h2>    
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-3 text-center">
                <div class="card justify-content-center card-form">
                    <div class="card-body">
                        <h2 class="contact-title hoverUnderline"><a class="full-link" href="./form.php?choise=1">Vragen</a></h2>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-3 text-center">
                <div class="card justify-content-center card-form">
                    <div class="card-body">
                        <h2 class="contact-title hoverUnderline"><a class="full-link" href="./form.php?choise=2">Feedback</a></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include_once('../../components/nl/footer.php')?>
</body>
</html>