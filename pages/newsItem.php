<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nieuws pagina</title>
    <link rel="stylesheet" href="../assets/styles/main.css" type="text/css">
    <link href="../assets/img/favicon-32x32.png" rel="icon" sizes="32x32" type="image/png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Title</h1>
            </div>
            <div class="col-12 col-md-6">
                <img src="../assets/img/news_items/1632480707.jpeg" class="w-100" alt="niews foto">
                <div class="news-author"><h5>Voornaam Achternaam</h5></div>
                <div class="news-text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In at finibus ante. Praesent eu arcu ut neque dapibus eleifend. Nulla vel velit felis. Nunc lacinia turpis diam, vel tincidunt justo congue at. Praesent vel odio enim. Etiam non ante eget ipsum dignissim faucibus non vel nisi. Nulla gravida ultrices est, sed iaculis odio sollicitudin id. In porttitor, quam eget semper ultricies, felis risus cursus ante, nec tincidunt sapien enim eget diam. Cras ultricies urna et facilisis sodales.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In at finibus ante. Praesent eu arcu ut neque dapibus eleifend. Nulla vel velit felis. Nunc lacinia turpis diam, vel tincidunt justo congue at. Praesent vel odio enim. Etiam non ante eget ipsum dignissim faucibus non vel nisi. Nulla gravida ultrices est, sed iaculis odio sollicitudin id. In porttitor, quam eget semper ultricies, felis risus cursus ante, nec tincidunt sapien enim eget diam. Cras ultricies urna et facilisis sodales.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In at finibus ante. Praesent eu arcu ut neque dapibus eleifend. Nulla vel velit felis. Nunc lacinia turpis diam, vel tincidunt justo congue at. Praesent vel odio enim. Etiam non ante eget ipsum dignissim faucibus non vel nisi. Nulla gravida ultrices est, sed iaculis odio sollicitudin id. In porttitor, quam eget semper ultricies, felis risus cursus ante, nec tincidunt sapien enim eget diam. Cras ultricies urna et facilisis sodales.</p>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <h3>Geef een reatie</h3> <!-- geplaatste reacties-->
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
                <h3 class="mt-3">Schrijf u reactie</h3>
                <form action="newsItem.php" class="reactionForm" method="post">
                    <textarea class="form-control" name="message"></textarea>
                    <input type="submit" class="btn btn-primary mt-2" height="80" value="Versturen">
                </form>
            </div>
        </div>
    </div>
</body>
</html>