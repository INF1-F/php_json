<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include_once('../components/head.php') ?>
        <title>Feedback</title>
    </head>
    <?php
    if (isset($_GET['choise'])) {
        if ($_GET['choise'] == 0) {
            $formChoise = "Complaints";
        } else if ($_GET['choise'] == 1) {
            $formChoise = "Questions";
        } else if ($_GET['choise'] == 2) {
            $formChoise = "Feedback";
        } else {
            header("Location: ./contact-choise.php");
        }
    }else {
        echo "No";
    }
    ?>
    <body>
        <?php include_once('../components/header.php') ?>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1><?=$formChoise?></h1>
                </div>
                <div class="col-12 mb-3">
                    <div class="card align-items">
                        <div class="card-body">
                            <form class="contactForm" action="formResult.php" method="POST">     
                                <input type="hidden" value="<?=$formChoise?>" name="sort">
                                <?php
                                if ($_GET['choise'] == 1) {
                                ?> 
                                    <div class="form-row">
                                        <label for="name"><b>Name</b></label>
                                        <input class="form-control" type="text" value="<?=$_SESSION["fullName"]?>" name="name" id="name">              
                                    </div>
                                <?php
                                }
                                ?>
                                <div class="form-row">
                                    <label for="Opleiding"><b>Education</b></label>
                                        <select id="Opleiding" class="form-control" name="education">
                                        <option value="Information Technology">Information Technology</option>
                                        <option value="Business Administration ">Business Administration</option>
                                        <option value="Content & Media Strategy (master)">Content & Media Strategy (master)</option>
                                        <option value="Creative Business, Media Management">Creative Business, Media Management</option>
                                        <option value="Creative Business, Media Management (3 year)">Creative Business, Media Management (3 year)</option>
                                        <option value="Hospitality Management">Hospitality Management</option>
                                        <option value="Hospitality Management (3 year)">Hospitality Management (3 year)</option>
                                        <option value="Hospitality Management (Ad)">Hospitality Management (Ad)</option>
                                        <option value="International Business">International Business</option>
                                        <option value="International Hospitality and Service Management (Master)">International Hospitality and Service Management (Master)</option>
                                        <option value="International Hospitality and Service Management (Master) Part-time">International Hospitality and Service Management (Master) Part-time</option>
                                        <option value="International Leisure, Tourism & Events Management">International Leisure, Tourism & Events Management</option>
                                        <option value="International Logistics Management">International Logistics Management</option>
                                        <option value="International Teacher Education for Primary Schools (ITEps)">International Teacher Education for Primary Schools (ITEps)</option>
                                        <option value="International Teacher Education for Secondary Schools (ITESS)">International Teacher Education for Secondary Schools (ITESS)</option>
                                        <option value="Leisure & Events Management">Leisure & Events Management</option>
                                        <option value="Leisure & Events Management (Ad)">Leisure & Events Management (Ad)</option>
                                        <option value="Marketing Management">Marketing Management</option>
                                        <option value="Master Computer Vision & Data Science">Master Computer Vision & Data Science</option>
                                        <option value="Tourism Management">Tourism Management</option>
                                        <option value="Tourism Management (3 year)">Tourism Management (3 year)/option>
                                    </select>
                                </div>
                                <div class="form-row">
                                    <label for="Locatie"><b>Location</b></label>
                                    <select class="form-control" id="Locatie" name="location">
                                        <option value="Emmen">Emmen</option>
                                        <option value="Amsterdam">Amsterdam</option>
                                        <option value="Assen">Assen</option>
                                        <option value="Groningen">Groningen</option>
                                        <option value="Leeuwarden">Leeuwarden</option>
                                        <option value="Meppel">Meppel</option>
                                        <option value="Terschelling">Terschelling</option>
                                        <option value="Zwolle">Zwolle</option>
                                    </select>
                                </div>
                                <div class="form-row">
                                    <label for="Feedback"><b>Feedback</b></label>
                                    <textarea id="Feedback" class="form-control" name="message" style="height: 200px;" placeholder="Type here your feedback"></textarea>
                                </div>
                                <div class="form-row">                                           
                                    <input class="float-right btn btn-primary" type="submit" value="Send">
                                </div> 
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once('../components/footer.php') ?>
    </body>
</html>
        