<?php
//TODO: field validation

// include bestand, zodat we funties van dat bestand hier kunnen gebruiken
include './function.php';

// Checked of titel wel word mee gestuurd vanuit het formulier
if(isset($_GET['poll'])){

    $time = time();

    $poll = Array (
        $time => Array(
            "question" => $_GET['poll']
        )
    );

    $all_polls = getJsonContent('poll', 'nl');

    $old_items = (object) array_replace_recursive((array)$poll, (array)$all_polls);


    writeToJsonFile($all_polls, 'poll', 'nl');

    header('Location: ../pages/nl/poll.php');

}