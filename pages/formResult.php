<?php

if(isset($_POST['sort'])) {
    $sort = $_POST['sort'];
    if (!isset($_POST['name'])) {
        $name = "Anoniem";
    }else {
        $name = $_POST['name'];
    }

    if(isset($_POST['education'])) {
        $education = $_POST['education'];
    }

    if(isset($_POST['location'])) {
        $location = $_POST['location'];
    }

    if(isset($_POST['message']) && !empty($_POST['message'])) {
        $message = $_POST['message'];
    }


    $file = fopen ('../assets/data/formReaction/formData-'.date("YmdHis").'.txt', 'a');

    fwrite($file, "Type formulier:");
    fwrite($file, $sort . "\n");

    fwrite($file, "naam:");
    fwrite($file, $name . "\n");

    fwrite($file, "Type opleiding:");
    fwrite($file, $education . "\n");

    fwrite($file, "Locatie:");
    fwrite($file, $location . "\n");

    fwrite($file, "Bericht:");
    fwrite($file, $message . "\n");

    fclose($file);
}

?>
<!DOCTYPE html>
<html>
    <head>
        <?php include_once('../components/head.php') ?>
        <title>Feedback</title>
    </head>
    <body>
        <?php include_once('../components/header.php') ?>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="verzonden"><p>Bedankt voor het versturen! U krijgt zo spoedig mogelijk antwoord!</p></div>
                </div>
            </div>
        </div>
        <?php include_once('../components/footer.php') ?>
    </body>
</html>
        





