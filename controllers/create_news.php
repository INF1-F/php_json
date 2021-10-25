<?php
//TODO: field validation
// include bestand, zodat we funties van dat bestand hier kunnen gebruiken
include '../components/function.php';

// Checked of titel wel word mee gestuurd vanuit het formulier
if(isset($_POST['title'])){
    // Time() = huidige unix-tijd
    $time = time();
    $lang = $_POST['lang'];
    
    // Kijkt of er een bestand word geupload
    if(isset($_FILES['image'])){
        // Bestand type bijv: image/jpg
        $file_type = $_FILES['image']['type'];
        // split de string: image/jpg
        $extensie = explode('/', $file_type);
        // path waar afbeelding word opgeslagen + naam van het bestand
        $path = 'assets/img/news_items/'.$lang.'/'.$time.'.'.$extensie[1];
        // Verplaats de geuploade bestand naar een nieuwe locatie: $path
        move_uploaded_file($_FILES['image']["tmp_name"], ROOT_PATH.$path);
    }

    // Zet de ingevulde gegevens in een associative array
    $news_item = Array (
        $time => Array(
            "title" => $_POST['title'],
            "article" =>$_POST['article'],
            "image" => $path,
            "author" => $_POST['author']
        )
    );

    // Haalt de data uit news.json
    $old_items = getJsonContent('news', $lang);

    // TODO: controleer of $old_items leeg is, zo ja sla foreach over!
    $old_items = (object) array_replace_recursive((array)$news_item, (array)$old_items);

    // $content = addNewsItemToContent($old_items, $news_item, $time);

    // Zet data in news.json
    writeToJsonFile($old_items, 'news', $lang);

}

// Stuurt de gebruiker terug naar index.php
header('Location: ../pages/news.php');

