<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include_once('../../components/head.php') ?>
        <title>Feedback</title>
    </head>
    <?php
    if (isset($_GET['choise'])) {
        if ($_GET['choise'] == 0) {
            $formChoise = "Complaints";
        } else if ($_GET['choise'] == 1) {
            $formChoise = "Question";
        } else if ($_GET['choise'] == 2) {
            $formChoise = "Feedback";
        } else {
            header("Location: ./contact-choise.php");
        }
    }else {
      echo "Er is geen keuze gemaakt";
    }
    ?>
    <body>
        <?php include_once('../../components/en/header.php') ?>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1><?=$formChoise?></h1>
                </div>
                <div class="col-12 mb-3">
                    <div class="card align-items">
                        <div class="card-body">
                            <form class="contactForm" action="./formResult.php" method="POST">     
                                <input type="hidden" value="<?=$formChoise?>" name="sort">
                                <input type="hidden" value="<?=$_GET['choise']?>" name="formtype">
                                <?php
                                if ($_GET['choise'] == 1) {
                                ?> 
                                    <div class="form-row">
                                        <label for="name">
                                         <b>Name *</b>
                                          <?php if(isset($_GET['error']) && $_GET['error'] == 'name')
                                          echo"<span class='contact-warning'> No name entered </span>";   
                                          ?> 
                                        </label>
                                        <input class="form-control" type="text" value="<?=$_SESSION["fullName"]?>" name="name" id="name" required>              
                                    </div>
                                <?php
                                }
                                ?>
                                <div class="form-row">
                                    <label for="Opleiding">
                                        <b>Training *</b>
                                        <?php if(isset($_GET['error']) && $_GET['error'] == 'education')
                                        echo"<span class='contact-warning'> No training completed </span>";   
                                        ?>
                                
                                    </label>
                                        <select id="Opleiding" class="form-control" name="education" required>
                                        <option value="HBO-ICT">HBO-ICT</option>
                                        <option value="Academic Pabo">Academic Pabo</option>
                                        <option value="Accountancy">Accountancy</option>
                                        <option value="Hotel Management(Ad)">Hotel Management(Ad)</option>
                                        <option value="Business Administration">Business administration</option>
                                        <option value="Public administration - Government management">Business administration - government management</option>
                                        <option value="Biology and Medical Laboratory Research">Biology and Medical Laboratory Research</option>
                                        <option value="Biotechnology">Biotechnology</option>
                                        <option value="Architecture">Architecture</option>
                                        <option value="Chemistry">Chemistry</option>
                                        <option value="Chemical Engineering">Chemical Engineering</option>
                                        <option value="Civil Engineering">Civil Engineering</option>
                                        <option value="Commercial Economy">Commercial Economy</option>
                                        <option value="Communication">Communication</option>
                                        <option value="Communication & Multimedia Design">Communication & Multimedia Design</option>
                                        <option value="Content & Media Strategy">Content & Media Strategy</option>
                                        <option value="Creative Business(Media Management)">Creative Business(Media Management)</option>
                                        <option value="Creative Media Professional">Creative Media Professional</option>
                                        <option value="Design Driven Innovation">Design Driven Innovation</option>
                                        <option value="Didactical Educational Professional">Didactical Educational Professional</option>
                                        <option value="Teacher Visual Arts and Design">Teacher Visual Arts and Design</option>
                                        <option value="Teacher Theater">Teacher Theater</option>
                                        <option value="Educational Leadership">Educational Leadership</option>
                                        <option value="Electrical engineering">Electrical engineering</option>
                                        <option value="European Study">European Study</option>
                                        <option value="Finance & Control(Business Economics)">Finance & Control(Business Economics)</option>
                                        <option value="Finance, Tax and Advice(FTA)">Finance, Tax and Advice(FTA)</option>
                                        <option value="HBO Rights">HBO Rights</option>
                                        <option value="Health Innovation">Health Innovation</option>
                                        <option value="Hotel Management">Hotel Management</option>
                                        <option value="Human Resource Management">Human Resource Management</option>
                                        <option value="ICT Management">ICT Management</option>
                                        <option value="Industrial Automation and Robotics">Industrial Automation and Robotics</option>
                                        <option value="Computer Science">Informatics</option>
                                        <option value="Integral Safety Science">Integral Safety Science</option>
                                        <option value="International Business">International Business</option>
                                        <option value="International Hospitality & Service Management">International Hospitality & Service Management</option>
                                        <option value="International Leisure, Tourism & Events Management">International Leisure, Tourism & Events Management</option>
                                        <option value="International Teacher Education for Secondary Schools">International Teacher Education for Secondary Schools</option>
                                        <option value="International Pabo">International Pabo</option>
                                        <option value="IT Service Management">IT Service Management</option>
                                        <option value="First-degree Teacher Training 2nd degree">First-degree Training Teacher 2nd degree</option>
                                        <option value="Art Education">Art Education</option>
                                        <option value="Learning and Innovation">Learning and Innovation</option>
                                        <option value="Leisure & Events Management">Leisure & Events Management</option>
                                        <option value="Geography teacher">Geography teacher</option>
                                        <option value="Economics teacher">Economics teacher</option>
                                        <option value="Biology Teacher">Biology Teacher</option>
                                        <option value="German teacher">German teacher</option>
                                        <option value="Economics teacher">Economics teacher</option>
                                        <option value="English teacher">English teacher</option>
                                        <option value="French teacher">French teacher</option>
                                        <option value="Teacher Frisian">Teacher Frisian</option>
                                        <option value="Teacher History">Teacher History</option>
                                        <option value="Health & Welfare Teacher">Health & Welfare Teacher</option>
                                        <option value="Social Studies Teacher">Social Studies Teacher</option>
                                        <option value="Physics teacher">Physics teacher</option>
                                        <option value="Dutch teacher">Dutch teacher</option>
                                        <option value="Teacher Social Sciences">Teacher Social Sciences</option>
                                        <option value="Chemistry Teacher">Chemistry Teacher</option>
                                        <option value="Math teacher">Math teacher</option>
                                        <option value="Logistics Management">Logistics Management</option>
                                        <option value="Logistics and Economics">Logistics and Economics</option>
                                        <option value="Marine Shipping Innovation">Marine Shipping Innovation</option>
                                        <option value="Maritime Officer">Maritime Officer</option>
                                        <option value="Maritime Technology">Maritime Technology</option>
                                        <option value="Marketing Management">Marketing Management</option>
                                        <option value="Ocean Technology">Ocean Technology</option>
                                        <option value="Entrepreneurship & Retail">Entrepreneurship & Retail</option>
                                        <option value="Online Contentcreator">Online Contentcreator</option>
                                        <option value="Pabo">Pabo</option>
                                        <option value="Pedagogy">Pedagogy</option>
                                        <option value="Polymer Engineering">Polymer Engineering</option>
                                        <option value="Spatial Development">Spatial Development</option>
                                        <option value="Serious Gaming">Serious Gaming</option>
                                        <option value="Service, Welfare & Healthcare">Service, Welfare & Healthcare</option>
                                        <option value="Social Work">Social Work</option>
                                        <option value="Technical Business Administration">Technical Business Administration</option>
                                        <option value="Technical Informatics">Technical Informatics</option>
                                        <option value="Applied Mathematics">Applied Mathematics</option>
                                        <option value="Tourism Management">Tourism Management</option>
                                        <option value="Professional Therapy">Professional Therapy</option>
                                        <option value="Nursing">Nursing</option>
                                        <option value="Food Technology">Food Technology</option>
                                        <option value="Mechanical Engineering">Mechanical Engineering</option>
                                    </select>
                                </div>
                                <div class="form-row">
                                    <label for="Locatie">
                                    <b>Location *</b>
                                    <?php if(isset($_GET['error']) && $_GET['error'] == 'location')
                                          echo"<span class='contact-warning'> No location entered</span>";   
                                    ?>
                                    </label>
                                    <select class="form-control" id="Locatie" name="location" required>
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
                                    <label for="message">
                                        <b>Message *</b>
                                        <?php if(isset($_GET['error']) && $_GET['error'] == 'message')
                                          echo"<span class='contact-warning'> No message entered </span>";   
                                        ?>
                                    </label>
                                    <textarea id="message" class="form-control" name="message" style="height: 200px;" placeholder="Type your message here" required></textarea>
                                </div>
                                <div class="form-row">                                           
                                    <input class="float-right btn btn-custom" name="submit" type="submit" value="Send">
                                </div> 
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once('../../components/en/footer.php') ?>
    </body>
</html>
