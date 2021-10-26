<?php
// include bestand, zodat we funties van dat bestand hier kunnen gebruiken
include '../components/function.php';

// Checked of titel wel word mee gestuurd vanuit het formulier
if (isset($_POST['userLang']) && !empty($_POST['userLang'])) {
    $user_lang = $_POST['userLang'];
    if (isset($_POST['title']) && !empty($_POST['title'])) {
        if (isset($_POST['description']) && !empty($_POST['description'])) {
            if (isset($_POST['lang']) && !empty($_POST['lang'])) {
                $lang = $_POST['lang'];
                if (isset($_POST['expire_date']) && !empty($_POST['expire_date'])) {
                    if (isset($_POST['anwser1']) && !empty($_POST['anwser1'])) {
                        if (isset($_POST['anwser2']) && !empty($_POST['anwser2'])) {
                            $time = time();
                            $poll = array(
                                $time => array(
                                    "title" => $_POST['title'],
                                    "description" => $_POST['description'],
                                    "expire_time" => $_POST['expire_date'],
                                    "questions" => array(
                                        $_POST['anwser1'] => 0,
                                        $_POST['anwser2'] => 0
                                    )
                                )
                            );

                            $all_polls = getJsonContent('poll', $lang);
                            $old_items = (object) array_replace_recursive((array)$poll, (array)$all_polls);

                            writeToJsonFile($old_items, 'poll', $lang);

                            header("Location: ../pages/{$user_lang}/home.php");
                        } else {
                            header("Location: ../pages/{$user_lang}/add-poll.php?error=anwser2");
                        }
                    } else {
                        header("Location: ../pages/{$user_lang}/add-poll.php?error=anwser1");
                    }
                } else {
                    header("Location: ../pages/{$user_lang}/add-poll.php?error=date");
                }
            } else {
                header("Location: ../pages/{$user_lang}/add-poll.php?error=lang");
            }
        } else {
            header("Location: ../pages/{$user_lang}/add-poll.php?error=description");
        }
    } else {
        header("Location: ../pages/{$user_lang}/add-poll.php?error=title");
    }
} else {
    header("Location: ../pages/{$user_lang}/add-poll.php?error=userLang");
}
