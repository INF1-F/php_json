<?php
//TODO: field validation

// include bestand, zodat we funties van dat bestand hier kunnen gebruiken
include './function.php';

// Checked of titel wel word mee gestuurd vanuit het formulier
if(isset($_GET['poll'])){

    $time = time();

    $poll = Array (
        $time => Array(
            "title" => $_GET['poll'],
            "description" => '',
            "exp-time" => 123213232,
            "questions" => array(
                $_POST['anwser1'] => 0,
                $_POST['anwser2'] => 0
            )
        )
    );

    $all_polls = getJsonContent('poll', 'nl');

    $old_items = (object) array_replace_recursive((array)$poll, (array)$all_polls);


    writeToJsonFile($all_polls, 'poll', 'nl');

    header('Location: ../pages/nl/poll.php');

}