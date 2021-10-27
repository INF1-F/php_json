<?php
session_start();
?>
<!DOCTYPE html>
<html lang="nl">
    <head>
        <?php include_once('../../components/head.php') ?>
        <title>Feedback</title>
    </head>
    <body>
        <?php include_once('../../components/nl/header.php') ?>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="verzonden">
                    <?php
                    if(isset($_POST['submit'])) {
                        if (isset($_POST['sort']) && isset($_POST['formtype'])) {
                            $sort = $_POST['sort'];
                            $formtype = $_POST['formtype'];
                            if(isset($_POST['education']) && !empty($_POST['education'])) {
                                $education = $_POST['education'];
                                if(isset($_POST['location']) && !empty($_POST['location'])) {
                                    $location = $_POST['location'];
                                    if(isset($_POST['message']) && !empty($_POST['message'])) {
                                        $message = $_POST['message'];
                                        if (isset($_POST['name']) && !empty($_POST['name']))  {
                                            $name = $_POST['name'];
                                        } else {
                                            $name = "Anoniem";
                                        }

                                        $file = fopen ('../../assets/data/contact/formData-'.date("YmdHis").'.txt', 'a'); //waneer men het formulier verzend, word een file opengemaakt waar de formsdata wordt opgeslagen.

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
                                        echo "<p>Bedankt voor het versturen! U krijgt zo spoedig mogelijk antwoord!</p>"; //waneer men het formulier verzend, komt er "bedankt voor het versturen te staan
                                    } else {
                                        header("location: form.php?choise={$formtype}&error=message");//wanneer je formulier verzendt,komt de errormessage tevoorschijn wanneer je geen message hebt ingevuld
                                    } 
                                } else {
                                    header("location: form.php?choise={$formtype}&error=location");//wanneer je formulier verzendt,komt de errormessage tevoorschijn wanneer je geen locatie hebt ingevuld
                                } 
                            } else {
                                header("location: form.php?choise={$formtype}&error=education");//wanneer je formulier verzendt,komt de errormessage tevoorschijn wanneer je geen opleiding hebt ingevuld
                            } 
                        }else {
                            header("location: form.php?choise={$formtype}&error=sort");//wanneer je formulier verzendt,komt de errormessage tevoorschijn wanneer je geen soortformulier hebt ingevuld
                        }
                    }
                    ?>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once('../../components/nl/footer.php') ?>
    </body>
</html>
        





