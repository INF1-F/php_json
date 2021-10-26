<!DOCTYPE html>
<html lang="nl" class="h-100">

<head>
    <?php include_once('../../components/head.php') ?>
    <title>Nieuws</title>
</head>

<body class="h-100">
    <?php include_once('../../components/nl/header.php') ?>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-12">
                <h2>Vaak gestelde vragen</h2>
            </div>
        </div>
        <div class="mt-2 mb-2">
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="dividerLine">
                    <button type="button" class="expandBtn closedContent">Vraag 1</button>
                    <div class="expContent">
                        <p class="mt-0">> Antwoord 1 | Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="dividerLine">
                    <button type="button" class="expandBtn closedContent">Vraag 2</button>
                    <div class="expContent">
                        <p class="mt-0">> Antwoord 2 | Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="dividerLine">
                    <button type="button" class="expandBtn closedContent">Vraag 3</button>
                    <div class="expContent">
                        <p class="mt-0">> Antwoord 3 | Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-12">
                <button type="button" class="expandBtn closedContent">Vraag 4</button>
                <div class="expContent">
                    <p class="mt-0">> Antwoord 4 | Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>
        </div>
        </div>
        <script type="text/javascript">
            var expBtns = document.getElementsByClassName("expandBtn");

            for (var i = 0; i < expBtns.length; i++) {
                expBtns[i].addEventListener("click", function() {
                    this.classList.toggle("active");
                    var content = this.nextElementSibling;
                    if (content.style.display === "block") {
                        content.style.display = "none";
                        this.classList.add("closedContent");
                        this.classList.remove("openedContent");
                    } else {
                        content.style.display = "block";
                        this.classList.add("openedContent");
                        this.classList.remove("closedContent");
                    }
                });
            }
        </script>
    </div>
    <?php include_once('../../components/nl/footer.php') ?>
</body>

</html> 