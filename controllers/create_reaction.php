<?php
// include bestand, zodat we funties van dat bestand hier kunnen gebruiken
include './reaction.php';
include '../components/function.php';

$id = $_POST['id'];

// Checked of reaction wel word mee gestuurd vanuit het formulier
if(isset($_POST['reaction']) && !empty($_POST['reaction'])){
    $author = $_POST['author'];
    $reaction = $_POST['reaction'];

    // Maakt reacties aan
    $reaction = createReaction($author, $reaction);
    // Haalt alles op van news.json
    $content = getJsonContent('news', 'nl');
    // Voegt reactie toe aan nieuwsitem
    $news_item = addReactionToItem($reaction, $content->{$id});
    // Voegt reactie toe aan alle nieuws items
    $new_content = addNewsItemToContent($content, $news_item, $id);
    // Zet alle nieuws items toe aan news.json
    writeToJsonFile($new_content, 'news', 'nl');
}

// Stuurt de gebruiker terug naar news-item.php

header('Location: ../pages/news-item.php?id='. $id);