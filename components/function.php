<?php
// Path naar root van project
define('ROOT_PATH', dirname(__DIR__).'/');
/**
 * Haalt de data uit news.json
 * @param: $file: String, bestands naam waar de data uit word gehaald
 * @return: associative array: alle nieuwsitems
 */
function getJsonContent($file, $lang){
    // Leest bestand uit en zet het in een string
    $json = file_get_contents(ROOT_PATH.'assets/data/'.$lang.'/'.$file.'.json');
    // Decode JSON string, zodat we het kunnen gebruiken om data toe tevoegen of te tonen
    $content = json_decode($json);
    
    return $content;
}

/**
 * Zet data in news.json
 * @param: $content, associative array: alle nieuwsitems
 * @param: $file: String, bestands naam waar de data uit word gehaald
 * @param: $lang, associative array: alle nieuwsitems
 */
function writeToJsonFile($content, $file, $lang){
    // Encode associative array naar JSON
    $json = json_encode($content, JSON_PRETTY_PRINT);
    // Zet $json in news.json, hier word alle nieuws items opgeslagen
    file_put_contents(ROOT_PATH.'assets/data/'.$lang.'/'.$file.'.json', $json);

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

function flip_ASarray($array){

    for($i = count((array) $array); $i > 0; $i--){
        $j = 0;
        $j++;
    printArray($array[$i]);

        
    }
    // return $new_array;
    die('');
}

function printArray($array){
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}