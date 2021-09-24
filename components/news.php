<?php
// Path naar root van project
define('ROOT_PATH', dirname(__DIR__).'/');

// Haalt de data uit data.json
/**
 * @return: associative array: alle nieuwsitems
 */
function getJsonContent(){
    // Leest bestand uit en zet het in een string
    // https://www.php.net/manual/en/function.file-get-contents
    $json = file_get_contents(ROOT_PATH.'assets/data/data.json');
    // Decode JSON string, zodat we het kunnen gebruiken om data toe tevoegen of te tonen
    // https://www.php.net/manual/en/function.json-decode
    $content = json_decode($json);
    
    return $content;
}

// Zet data in data.json
/**
 * @param: $content, associative array: alle nieuwsitems
 */
function writeToJsonFile($content){
    // Encode associative array naar JSON
    // https://www.php.net/manual/en/function.json-encode
    $json = json_encode($content);
    // Zet $json in data.json, hier word alle nieuws items opgeslagen
    // https://www.php.net/manual/en/function.file-put-contents
    file_put_contents(ROOT_PATH.'assets/data/data.json', $json);

}