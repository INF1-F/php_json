<?php
// setcookie("answerd_polls", "", time() - 3600);

include('../components/function.php');
$user_lang = $_POST['userLang'];
$id = $_POST['id'];
$answer = $_POST['answer'];

$polls = getJsonContent('poll', $user_lang);
$poll = $polls->$id;

$true = 0;
$false = 0;

if(isset($poll->answers)){
   $true = $poll->answers->true;
   $false = $poll->answers->false;
    
}

switch($answer){
    case 'true':
        $true += 1; 
        break;
    case 'false':
        $false += 1; 
        break;
}

$answers = array(
    "answers" => array (
        "true" => $true,
        "false" => $false
    )
  
);

$poll = (object) array_merge((array)$poll, (array)$answers);

$polls->{$id} = $poll;

writeToJsonFile($polls, 'poll', $user_lang);
setIdInCookie($id);

header("Location: ../pages/{$user_lang}/home.php");