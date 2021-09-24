<?php

include '../components/reaction.php';
include '../components/news.php';

if(isset($_GET['reaction'])){
    $reaction = createReaction($_GET['author'], $_GET['reaction']);
    $content = getJsonContent();
    $news_item = addReactionToItem($reaction, $content->{$_GET['id']});
    $new_content = addItemToContent($content, $news_item, $_GET['id']);
    writeToJsonFile($new_content);
}

header('Location: ../pages/news.php');