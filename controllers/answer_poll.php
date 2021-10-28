<?php
// setcookie("answerd_polls", "", time() - 3600);

include('../components/function.php');
$user_lang = $_POST['userLang'];
$id = $_POST['id'];
$question = strip_tags(htmlspecialchars($_POST['question']));

$polls = getJsonContent('poll', $user_lang);
$poll = $polls->$id;

$poll->questions->$question += 1;
$polls->$id = $poll;

writeToJsonFile($polls, 'poll', $user_lang);

setcookie("{$user_lang}_poll_id", $id, time() + (365 * 24 * 60 * 60), '/');


header("Location: ../pages/{$user_lang}/home.php");