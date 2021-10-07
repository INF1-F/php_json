<?php
//TODO: field validation

// include bestand, zodat we funties van dat bestand hier kunnen gebruiken
include './main.php';

// Checked of titel wel word mee gestuurd vanuit het formulier
if(isset($_POST['title'])){
    // Time() = huidige unix-tijd
    $time = time();
    // Kijkt of er een bestand word geupload
    if(isset($_FILES['image'])){
        // Bestand type bijv: image/jpg
        $file_type = $_FILES['image']['type'];
        // split de string: image/jpg
        $extensie = explode('/', $file_type);
        // path waar afbeelding word opgeslagen + naam van het bestand
        $path = 'assets/img/news_items/'.$time.'.'.$extensie[1];
        // Verplaats de geuploade bestand naar een nieuwe locatie: $path
        move_uploaded_file($_FILES['image']["tmp_name"], ROOT_PATH.$path);
    }

    // Zet de ingevulde gegevens in een associative array
    // Zie tutorial!
    $news_item = Array (
        $time => Array(
            "title" => $_POST['title'],
            "beschrijving" =>$_POST['beschrijving'],
            "image" => $path
        )
    );

    // Haalt de data uit news.json
    $old_items = getJsonContent('news');

    // TODO: controleer of $old_items leeg is, zo ja sla foreach over!
    foreach($news_item AS $var=>$value){
        $old_items->$var = $value;
    }
    // $content = addNewsItemToContent($old_items, $news_item, $time);

    // Zet data in news.json
    writeToJsonFile($old_items, 'news');

}

// Stuurt de gebruiker terug naar index.php
header('Location: ../index.php');

