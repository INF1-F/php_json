<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loginpagina</title>
    <link rel="stylesheet" href="./assets/styles/main.css">
    <link href="./assets/img/favicon-32x32.png" rel="icon" sizes="32x32" type="image/png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
</head>

<body class="h-100 login-background">
    <?php
    if (isset($_POST['login'])) {
        $email = $_POST["email"];
        if(strpos($email, '@') && substr($email, -22) === "student.nhlstenden.com"){ //Check voor studentenmail.
            $naam = GetName($email);
            if($naam){ //zodra er een naam is stuur de gebruiker door naar de volgende pagina. Hierbij wordt ook de naam en rol (student/leraar) meegenomen.
                echo $naam;
                header("Location: ./pages/home.php?naam=$naam&machten=student");

                //Voor nu wordt de informatie doorhgestuurd naar home.php en opgehaalt met _GET in dat bestand.             <---------------
                //Dit kan makkelijker met sessies, maar dat is makkelijker te integreren zodra de home.php is gemaakt.      <---------------
            }
        }
        else if (strpos($email, '@') && substr($email, -14) === "nhlstenden.com") { //Check voor een leraren mail.
            $naam = GetName($email);
            if($naam){
                echo $naam;
                header("Location: ./pages/home.php?naam=$naam&machten=docent");
            }
        } 
        else {
            echo PrintError("Het ingevoerde emailadres is niet geldig");
        }
    }

    function GetName($email) {
        $fullname = explode("@", $email)[0];
        if (strpos($fullname, '.')) { //Kijk of de naam bestaat uit een voornaam en achternaam
            $name = explode(".", $fullname)[0]; //haal de voornaam uit de voor- en achternaam
            return $name;
            exit;
        } else {
            echo PrintError("Een email moet bestaan uit 'voornaam.achternaam@nhlstenden.com'");
        }
    }

    function PrintError($errorText) { //Functie die een error balk print met de class 'popup'.
        return "<div class='popup'> $errorText </div>";
    }

    ?>
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex h-100">
                <div class="login-container mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                                <div class="col-12 text-center mt-3 mb-3 "><img src="./assets/img/Logo.svg" style="height:150px;" alt="logo"></div>
                                <div class="row">
                                    <label for="login-email" class="col-12 mb-1">
                                        Emailadress:
                                    </label>
                                    <div class="col-12">
                                        <input id="login-email" type="email" placeholder="Emailadres" <?php if(isset($_POST['email'])){ ?> value="<?= $_POST['email']?>" <?php } ?> name="email" class="form-control">
                                    </div>
                                </div>
                                <button type="submit" name="login" class="btn btn-primary float-right mt-3">
                                    <span class="material-icons align-middle">lock</span>
                                    Inloggen
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>