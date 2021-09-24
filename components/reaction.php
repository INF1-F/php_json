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
    
    if(isset($news_item->reactions)){
        $reactions = $news_item->reactions;
        $reaction = (object) array_replace_recursive((array)$reactions, (array)$reaction);
    }
    $reaction = array (
        'reactions' => $reaction
    );
    $updated = (object) array_merge((array)$news_item, (array)$reaction);

    return $updated;
}

function addItemToContent($content, $item, $id){
    $content->{$id} = $item;

    return $content;
}