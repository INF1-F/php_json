<!DOCTYPE html>
<html lang="nl">
    <head>
        <?php include_once('../../components/head.php') ?>
        <title>Feedback</title>
    </head>
    <?php
    if (isset($_GET['choise'])) {
        if ($_GET['choise'] == 0) {
            $formChoise = "Klachten";
        } else if ($_GET['choise'] == 1) {
            $formChoise = "Vragen";
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
        <?php include_once('../../components/nl/header.php') ?>
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
                                         <b>Naam *</b>
                                          <?php if(isset($_GET['error']) && $_GET['error'] == 'name')
                                          echo"<span class='contact-warning'> Geen naam ingevuld </span>";   
                                          ?> 
                                        </label>
                                        <input class="form-control" type="text" value="<?=$_SESSION["fullName"]?>" name="name" id="name" required>              
                                    </div>
                                <?php
                                }
                                ?>
                                <div class="form-row">
                                    <label for="Opleiding">
                                        <b>Opleiding *</b>
                                        <?php if(isset($_GET['error']) && $_GET['error'] == 'education')
                                        echo"<span class='contact-warning'> Geen opleiding ingevuld </span>";   
                                        ?>
                                
                                    </label>
                                        <select id="Opleiding" class="form-control" name="education" required>
                                        <option value="HBO-ICT">HBO-ICT</option>
                                        <option value="Academische Pabo">Academische Pabo</option>
                                        <option value="Accountancy">Accountancy</option>
                                        <option value="Hotel Management(Ad)">Hotel Management(Ad)</option>
                                        <option value="Bedrijfskunde">Bedrijfskunde</option>
                                        <option value="Bestuurskunde - Overheidsmanagement">Bestuurskunde - Overheidsmanagement</option>
                                        <option value="Biologie en Medisch Laboratoriumonderzoek">Biologie en Medisch Laboratoriumonderzoek</option>
                                        <option value="Biotechnologie">Biotechnologie</option>
                                        <option value="Bouwkunde">Bouwkunde</option>
                                        <option value="Chemie">Chemie</option>
                                        <option value="Chemische Technologie">Chemische Technologie</option>
                                        <option value="Civiele Techniek">Civiele Techniek</option>
                                        <option value="Commerciële Economie">Commerciële Economie</option>
                                        <option value="Communicatie">Communicatie</option>
                                        <option value="Communication & Multimedia Design">Communication & Multimedia Design</option>
                                        <option value="Content & Media Strategy">Content & Media Strategy</option>
                                        <option value="Creative Business(Media Management)">Creative Business(Media Management)</option>
                                        <option value="Creative Media Professional">Creative Media Professional</option>
                                        <option value="Design Driven Innovation">Design Driven Innovation</option>
                                        <option value="Didactisch Educatief Professional">Didactisch Educatief Professional</option>
                                        <option value="Docent Beeldende Kunst en Vormgeving">Docent Beeldende Kunst en Vormgeving</option>
                                        <option value="Docent Theater">Docent Theater</option>
                                        <option value="Educational Leadership">Educational Leadership</option>
                                        <option value="Elektrotechniek">Elektrotechniek</option>
                                        <option value="European Studie">European Studie</option>
                                        <option value="Finance & Control(Bedrijfseconomie)">Finance & Control(Bedrijfseconomie)</option>
                                        <option value="Finance, Tax and Advice(FTA)">Finance, Tax and Advice(FTA)</option>
                                        <option value="HBO-Rechten">HBO-Rechten</option>
                                        <option value="Health Innovation">Health Innovation</option>
                                        <option value="Hotel Management">Hotel Management</option>
                                        <option value="Human Resource Management">Human Resource Management</option>
                                        <option value="ICT Beheer">ICT Beheer</option>
                                        <option value="Industriële Automatisering en Robotica">Industriële Automatisering en Robotica</option>
                                        <option value="Informatica">Informatica</option>
                                        <option value="Integrale Veiligheidskunde">Integrale Veiligheidskunde</option>
                                        <option value="International Business">International Business</option>
                                        <option value="International Hospitality & Service Management">International Hospitality & Service Management</option>
                                        <option value="International Leisure, Tourism & Events Management">International Leisure, Tourism & Events Management</option>
                                        <option value="International Teacher Education for Secondary Schools">International Teacher Education for Secondary Schools</option>
                                        <option value="Internationale Pabo">Internationale Pabo</option>
                                        <option value="IT Service Management">IT Service Management</option>
                                        <option value="Kopopleiding Leraar 2e graads">Kopopleiding Leraar 2e graads</option>
                                        <option value="Kunsteducatie">Kunsteducatie</option>
                                        <option value="Learning and Innovation">Learning and Innovation</option>
                                        <option value="Leisure & Events Management">Leisure & Events Management</option>
                                        <option value="Leraar Aardrijkskunde">Leraar Aardrijkskunde</option>
                                        <option value="Leraar Algemene Economie">Leraar Algemene Economie</option>
                                        <option value="Leraar Biologie">Leraar Biologie</option>
                                        <option value="Leraar Duits">Leraar Duits</option>
                                        <option value="Leraar Economie">Leraar Economie</option>
                                        <option value="Leraar Engels">Leraar Engels</option>
                                        <option value="Leraar Frans">Leraar Frans</option>
                                        <option value="Leraar Fries">Leraar Fries</option>
                                        <option value="Leraar Geschiedenis">Leraar Geschiedenis</option>
                                        <option value="Leraar Gezondeheidszorg & Welzijn">Leraar Gezondeheidszorg & Welzijn</option>
                                        <option value="Leraar Maatschappijleer">Leraar Maatschappijleer</option>
                                        <option value="Leraar Natuurkunde">Leraar Natuurkunde</option>
                                        <option value="Leraar Nederlands">Leraar Nederlands</option>
                                        <option value="Leraar Omgangskunde">Leraar Omgangskunde</option>
                                        <option value="Leraar Scheikunde">Leraar Scheikunde</option>
                                        <option value="Leraar Wiskunde">Leraar Wiskunde</option>
                                        <option value="Logistics Management">Logistics Management</option>
                                        <option value="Logistiek en Economie">Logistiek en Economie</option>
                                        <option value="Marine Shipping Innovation">Marine Shipping Innovation</option>
                                        <option value="Maritiem Officier">Maritiem Officier</option>
                                        <option value="Maritieme Techniek">Maritieme Techniek</option>
                                        <option value="Marketing Management">Marketing Management</option>
                                        <option value="Ocean Technology">Ocean Technology</option>
                                        <option value="Ondernemerschap & Retail">Ondernemerschap & Retail</option>
                                        <option value="Online Contentcreator">Online Contentcreator</option>
                                        <option value="Pabo">Pabo</option>
                                        <option value="Pedagogiek">Pedagogiek</option>
                                        <option value="Polymer Engineering">Polymer Engineering</option>
                                        <option value="Ruimtelijke Ontwikkeling">Ruimtelijke Ontwikkeling</option>
                                        <option value="Serious Gaming">Serious Gaming</option>
                                        <option value="Service, Welzijn & Zorg">Service, Welzijn & Zorg</option>
                                        <option value="Social Work">Social Work</option>
                                        <option value="Technische Bedrijskunde">Technische Bedrijfskunde</option>
                                        <option value="Technische Informatica">Technische Informatica</option>
                                        <option value="Toegepaste Wiskunde">Toegepaste Wiskunde</option>
                                        <option value="Tourism Management">Tourism Management</option>
                                        <option value="Vaktherapie">Vaktherapie</option>
                                        <option value="Verpleegkunde">Verpleegkunde</option>
                                        <option value="Voedingsmiddelentechnologie">Voedingsmiddelentechnologie</option>
                                        <option value="Werktuigbouwkunde">Werktuigbouwkunde</option>
                                    </select>
                                </div>
                                <div class="form-row">
                                    <label for="Locatie">
                                    <b>Locatie *</b>
                                    <?php if(isset($_GET['error']) && $_GET['error'] == 'location')
                                          echo"<span class='contact-warning'> Geen locatie ingevuld</span>";   
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
                                        <b>Bericht *</b>
                                        <?php if(isset($_GET['error']) && $_GET['error'] == 'message')
                                          echo"<span class='contact-warning'> Geen bericht ingevuld </span>";   
                                        ?>
                                    </label>
                                    <textarea id="message" class="form-control" name="message" style="height: 200px;" placeholder="Typ hier uw bericht" required></textarea>
                                </div>
                                <div class="form-row">                                           
                                    <input class="float-right btn btn-custom" name="submit" type="submit" value="Versturen">
                                </div> 
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once('../../components/nl/footer.php') ?>
    </body>
</html>
