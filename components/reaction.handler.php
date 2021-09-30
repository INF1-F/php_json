<?php
//TODO: field validation

// include bestand, zodat we funties van dat bestand hier kunnen gebruiken
// https://www.php.net/manual/en/lua.include
include '../components/reaction.php';
include '../components/main.php';

// Checked of reaction wel word mee gestuurd vanuit het formulier
// https://www.php.net/manual/en/function.isset
if(isset($_GET['reaction'])){

    // Maakt reacties aan
    $reaction = createReaction($_GET['author'], $_GET['reaction']);
    // Haalt alles op van news.json
    $content = getJsonContent('news');
    // Voegt reactie toe aan nieuwsitem
    $news_item = addReactionToItem($reaction, $content->{$_GET['id']});
    // Voegt reactie toe aan alle nieuws items
    $new_content = addNewsItemToContent($content, $news_item, $_GET['id']);
    // Zet alle nieuws items toe aan news.json
    writeToJsonFile($new_content, 'new');
}

// Stuurt de gebruiker terug naar news.php
// https://www.php.net/manual/en/function.header
header('Location: ../index.php');

header('Location: ../pages/news.php');