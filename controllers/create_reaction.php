<?php
// include bestand, zodat we funties van dat bestand hier kunnen gebruiken
include './reaction.php';
include '../components/function.php';

$id = $_POST['id'];

if(isset($_POST['userLang']) && !empty($_POST['userLang'])){
    $user_lang = $_POST['userLang'];
}else{
    $user_lang = 'nl';
}

// Checked of reaction wel word mee gestuurd vanuit het formulier
if(isset($_POST['reaction']) && !empty($_POST['reaction'])){
    $author = htmlspecialchars($_POST['author']);
    $reaction = strip_tags(htmlspecialchars($_POST['reaction']));

    // Maakt reacties aan
    $reaction = createReaction($author, $reaction);
    // Haalt alles op van news.json
    $content = getJsonContent('news', $user_lang);
    // Voegt reactie toe aan nieuwsitem
    $news_item = addReactionToItem($reaction, $content->{$id});
    // Voegt reactie toe aan alle nieuws items
    $new_content = addNewsItemToContent($content, $news_item, $id);
    // Zet alle nieuws items toe aan news.json
    writeToJsonFile($new_content, 'news', $user_lang);
    
    // Stuurt de gebruiker terug naar news-item.php
    header("Location: ../pages/{$user_lang}/news-item.php?id={$id}");
}else {
    header("Location: ../pages/{$user_lang}/news-item.php?error=message&id={$id}");
}



