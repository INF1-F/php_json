<?php
// Path naar root van project
define('ROOT_PATH', dirname(__DIR__).'/');

/**
 * Haalt de data uit news.json
 * @param: $file: String, bestands naam waar de data uit word gehaald
 * @return: associative array: alle nieuwsitems
 */
function getJsonContent($file){
    // Leest bestand uit en zet het in een string
    $json = file_get_contents(ROOT_PATH.'assets/data/'.$file.'.json');
    // Decode JSON string, zodat we het kunnen gebruiken om data toe tevoegen of te tonen
    $content = json_decode($json);
    
    return $content;
}

/**
 * Zet data in news.json
 * @param: $content, associative array: alle nieuwsitems
 * @param: $file: String, bestands naam waar de data uit word gehaald
 */
function writeToJsonFile($content, $file){
    // Encode associative array naar JSON
    $json = json_encode($content);
    // Zet $json in news.json, hier word alle nieuws items opgeslagen
    file_put_contents(ROOT_PATH.'assets/data/'.$file.'.json', $json);

}

/**
 * @param: $content: associative array, alle nieuws items
 * @param: $item: associative array, nieuws item
 * @param: $id: String, id van nieuws item
 * @return: associative array, geupdated nieuws items
 */
function addNewsItemToContent($content, $item, $id){
    // Vervang of plaats $item in $content
    $content->{$id} = $item;

    return $content;
}
