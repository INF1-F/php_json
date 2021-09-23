<?php

function createReaction($author, $reaction){
    $reaction = Array (
        time() => Array(
            "author" => $author,
            "reaction" =>$reaction
        )
    );

    return $reaction;
}


function addReactionToItem($reaction, $news_item){
    $reactions = array (
        'reactions' => $reaction
    );
    $updated = (object) array_merge((array)$news_item, (array)$reactions);

    return $updated;
}

function addItemToContent($content, $item, $id){
    $content->{$id} = $item;

    return $content;
}