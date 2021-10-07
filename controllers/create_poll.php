<?php
//TODO: field validation

// include bestand, zodat we funties van dat bestand hier kunnen gebruiken
include './main.php';

// Checked of titel wel word mee gestuurd vanuit het formulier
if(isset($_GET['poll'])){

    $time = time();

    $poll = Array (
        $time => Array(
            "question" => $_GET['poll']
        )
    );

    $all_polls = getJsonContent('poll');

    // TODO: controleer of $all_polls leeg is, zo ja sla foreach over!
    foreach($poll as $key => $value){
        $all_polls->$key = $value;
    }

    writeToJsonFile($all_polls, 'poll');

    header('Location: ../pages/poll.php');

}