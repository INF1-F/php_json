<?php
//TODO: field validation

// include bestand, zodat we funties van dat bestand hier kunnen gebruiken
// https://www.php.net/manual/en/lua.include
include './news.php';

// Checked of titel wel word mee gestuurd vanuit het formulier
// https://www.php.net/manual/en/function.isset
if(isset($_POST['title'])){
    // Time() = huidige unix-tijd
    // https://www.php.net/manual/en/function.time
    $time = time();
    // Kijkt of er een bestand word geupload
    if(isset($_FILES['image'])){
        // Bestand type bijv: image/jpg
        $file_type = $_FILES['image']['type'];
        // split de string: image/jpg
        // https://www.php.net/manual/en/function.explode
        $extensie = explode('/', $file_type);
        // path waar afbeelding word opgeslagen + naam van het bestand
        $path = 'assets/img/news_items/'.$time.'.'.$extensie[1];
        // Verplaats de geuploade bestand naar een nieuwe locatie: $path
        // https://www.php.net/manual/en/function.move-uploaded-file.php
        move_uploaded_file($_FILES['image']["tmp_name"], ROOT_PATH.$path);
    }

    // Zet de ingevulde gegevens in een associative array
    // Zie tutorial!
    $new_item = Array (
        $time => Array(
            "title" => $_POST['title'],
            "beschrijving" =>$_POST['beschrijving'],
            "image" => $path
        )
    );

    // Haalt de data uit data.json
    $old_items = getJsonContent();

    // TODO: controleer of $old_items leeg is, zo ja sla foreach over!
    foreach($new_item AS $var=>$value){
        $old_items->$var = $value;
    }

    // Zet data in data.json
    writeToJsonFile($old_items);

}

// Stuurt de gebruiker terug naar index.php
// https://www.php.net/manual/en/function.header
header('Location: ../index.php');

