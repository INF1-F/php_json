<?php
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
        //https://www.php.net/manual/en/function.move-uploaded-file.php
        move_uploaded_file($_FILES['image']["tmp_name"], ROOT_PATH.$path);
    }

    //
    $new_item = Array (
        $time => Array(
            "title" => $_POST['title'],
            "beschrijving" =>$_POST['beschrijving'],
            "image" => $path
        )
    );

    $old_items = getJsonContent();

    //merge arrays
    foreach($new_item AS $var=>$value){
        $old_items->$var = $value;
    }


    writeToJsonFile($old_items);

}

header('Location: ../index.php');

