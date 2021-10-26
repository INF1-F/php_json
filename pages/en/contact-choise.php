<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include_once('../../components/head.php') ?>
        <title>Contact keuze</title>
    </head>

<body>
    <?php include_once('../../components/en/header.php')?>

    <div class="container">
        <div class="row">
            <div class="col-12 contact-title">
                <h1>Contact</h1>
            </div>
            <div class="col-12 col-md-4 mb-3 text-center">
                <div class="card justify-content-center card-form">
                    <div class="card-body">
                        <h2 class="contact-title"><a class="full-link" href="./form.php?choise=0">Complaints</a></h2>    
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-3 text-center">
                <div class="card justify-content-center card-form">
                    <div class="card-body">
                        <h2 class="contact-title"><a class="full-link" href="./form.php?choise=1">Question</a></h2>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-3 text-center">
                <div class="card justify-content-center card-form">
                    <div class="card-body">
                        <h2 class="contact-title"><a class="full-link" href="./form.php?choise=2">Feedback</a></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include_once('../../components/en/footer.php')?>
</body>
</html>