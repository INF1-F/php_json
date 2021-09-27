<?php

/**
 * @param: $author: String, Naam van die gene die de reactie heeft geschreven
 * @param: $reaction: String, De reactie zelf
 * @return: Array, reactie
 */
function createReaction($author, $reaction){
    // Zet de ingevulde gegevens in een associative array
    // Zie tutorial!
    $reaction = Array (
        // Time() = huidige unix-tijd
        // https://www.php.net/manual/en/function.time
        time() => Array(
            "author" => $author,
            "reaction" =>$reaction
        )
    );

    return $reaction;
}

/**
 * @param: $reaction: Array, reactie
 * @param: $news_item:  Array, nieuws item waar de reactie voor is
 * @return: associative array, nieuws item(met reacties)
 */
function addReactionToItem($reaction, $news_item){
    // Kijkt of de nieuws item al een reactie heeft
    if(isset($news_item->reactions)){
        // Zet alle reacties in $reactions
        $reactions = $news_item->reactions;
        // Voegt de nieuwe reactie toe aan de oude
        // https://www.php.net/manual/en/function.array-replace-recursive.php
        $reaction = (object) array_replace_recursive((array)$reactions, (array)$reaction);
    }
    // Zet alle reacties in een associative array
    // Zie tutorial!
    $reaction = array (
        'reactions' => $reaction
    );
    // Zet array van reacties in nieuws item array
    // https://www.php.net/manual/en/function.array-merge.php
    $updated = (object) array_merge((array)$news_item, (array)$reaction);

    return $updated;
}

/**
 * @param: $content: associative array, alle nieuws items
 * @param: $item: associative array, nieuws item
 * @param: $id: String, id van nieuws item
 * @return: associative array, geupdated nieuws items
 */
function addItemToContent($content, $item, $id){
    // Vervang of plaats $item in $content
    $content->{$id} = $item;

    return $content;
}