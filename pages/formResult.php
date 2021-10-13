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
                    <div class="verzonden">
                    <?php
                    if(isset($_POST['submit'])) {
                        if (isset($_POST['sort'])) {
                            $sort = $_POST['sort'];
                            if(isset($_POST['education'])) {
                                $education = $_POST['education'];
                                if(isset($_POST['location'])) {
                                    $location = $_POST['location'];
                                    if(isset($_POST['message']) && !empty($_POST['message'])) {
                                        $message = $_POST['message'];
                                        if (isset($_POST['name'])) {
                                            $name = $_POST['name'];
                                        } else {
                                            $name = "Anoniem";
                                        }

                                        $file = fopen ('../assets/data/contact/formData-'.date("YmdHis").'.txt', 'a');

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
                                        echo "<p>Bedankt voor het versturen! U krijgt zo spoedig mogelijk antwoord!</p>";
                                    } else {
                                        echo "<p>Het bericht is niet goed ingevuld in het formulier</p>";
                                    } 
                                } else {
                                    echo "<p>De locatie is niet goed ingevuld in het formulier</p>";
                                } 
                            } else {
                                echo "<p>De opleiding is niet ingevuld in het formulier</p>";
                            } 
                        }else {
                            echo "<p>Het Soort formulier is niet ingevuld</p>";
                        }
                    }
                    ?>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once('../components/footer.php') ?>
    </body>
</html>
        





