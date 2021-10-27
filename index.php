<?php
// ob_start();
session_start();
if (isset($_POST['login'])) {
    $email = $_POST["email"];
    if (strpos($email, '@') && substr($email, -22) === "student.nhlstenden.com") { //Check voor studentenmail.
        $name = GetName($email);
        if ($name) { //zodra er een naam is stuur de gebruiker door naar de volgende pagina. Hierbij wordt ook de naam en rol (student/leraar) meegenomen.
            // Add values to the session.
            $_SESSION["fullName"] = $name;
            $_SESSION["auth"] = "student";
            header("Location: ./pages/nl/home.php");
            exit;
        }
    } else if (strpos($email, '@') && substr($email, -14) === "nhlstenden.com") { //Check voor een leraren mail.
        $name = GetName($email);
        if ($name) {
            // Add values to the session.
            $_SESSION['fullName'] = $name;
            $_SESSION['auth'] = "teacher";
            header("Location: ./pages/nl/home.php");
            exit;
        }
    } else {
        echo PrintError("Het ingevoerde emailadres is niet geldig");
    }
}
?>
<!DOCTYPE html>
<html lang="nl" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/styles/main.css">
    <link href="./assets/img/favicon-32x32.png" rel="icon" sizes="32x32" type="image/png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
    <title>Loginpagina</title>
</head>

<body class="h-100 login-background" style="background-image: url('<?= getTheme() ?>');">
    <?php
    if (isset($_POST["logoff"])) {
        unset($_SESSION["auth"]);
        unset($_SESSION["fullName"]);
    }

    function GetName($email)
    {
        $name = explode("@", $email)[0];
        if (strpos($name, '.')) { //Kijk of de naam bestaat uit een voornaam en achternaam
            $fullname = preg_replace('/[0-9]+/', '', str_replace(".", " ", $name)); // uit fullname worden de punten vervangen door spaties en met de preg replace functie worden alle cijfers uit de naam gefilterd waar [0-9] controlleert op alle cijfers en de + staat voor hoever die moet zoeken en dat is tot einde string
            $unformattedNameList = explode(" ",$fullname);
            $unformattedNameList[count($unformattedNameList) - 1] = ucfirst($unformattedNameList[count($unformattedNameList) - 1]); // laaste woord krijgt hooftletter

            $unformattedNameList[0] = ucfirst($unformattedNameList[0]); // eerste woord krijgt hooftletter
            $formattedName = "";
            for ($i=0; $i < count($unformattedNameList); $i++) {  // plakken we de naam weer aan elkaar
                $formattedName .= " ". $unformattedNameList[$i];
            }
            
            return $formattedName; //return voor en achternaam met hooftletter van eerste woord en hooftletter van laaste woord
        } else {
            echo PrintError("Een email moet bestaan uit 'voornaam.achternaam@nhlstenden.com'");
        }
    }

    function PrintError($errorText)
    { //Functie die een error balk print met de class 'popup'.
        return "<div class='popup'> $errorText </div>";
    }
    function getTheme()
    {
        $today = new DateTime();

        // get the season dates
        $spring = new DateTime('March 1');
        $summer = new DateTime('June 1');
        $fall = new DateTime('September 1');
        $winter = new DateTime('December 1');

        switch (true) {
            case $today >= $spring && $today < $summer:
                return './assets/img/theme/spring.jpg';
                break;

            case $today >= $summer && $today < $fall:
                return './assets/img/theme/summer.jpg';
                break;

            case $today >= $fall && $today < $winter:
                return './assets/img/theme/autumm.jpg';
                break;

            default:
                return "./assets/img/theme/winter.jpg";
        }
    }

    ?>
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex h-100">
                <div class="login-container mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                                <div class="col-12 text-center mt-3 mb-3 ">
                                    <img src="./assets/img/Logo.svg" style="height:150px;" alt="logo">
                                </div>
                                <div class="col-12 text-center mt-3 mb-3 ">
                                    <h2>Welcome at the NHL Stenden Student platform!</h2>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <label for="login-email" class="mb-1">
                                            Enter your emailadress to log in:
                                        </label>
                                    </div>
                                    <div class="col-12">
                                        <input id="login-email" type="email" placeholder="Emailadress..." <?php if (isset($_POST['email'])) { ?> value="<?= $_POST['email'] ?>" <?php } ?> name="email" class="form-control">
                                    </div>
                                    <div class="col-12 text-right">
                                        <button type="submit" name="login" class="btn btn-custom mt-3">
                                            <span class="material-icons align-middle">lock</span>
                                            Log in
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>