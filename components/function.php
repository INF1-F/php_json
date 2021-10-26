<?php
// Path naar root van project

use function PHPSTORM_META\type;

define('ROOT_PATH', dirname(__DIR__) . '/');
/**
 * Haalt de data uit news.json
 * @param: $file: String, bestands naam waar de data uit word gehaald
 * @return: associative array: alle nieuwsitems
 */
function getJsonContent($file, $lang)
{
    // Leest bestand uit en zet het in een string
    $json = file_get_contents(ROOT_PATH . 'assets/data/' . $lang . '/' . $file . '.json');
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
function writeToJsonFile($content, $file, $lang)
{
    // Encode associative array naar JSON
    $json = json_encode($content, JSON_PRETTY_PRINT);
    // Zet $json in news.json, hier word alle nieuws items opgeslagen
    file_put_contents(ROOT_PATH . 'assets/data/' . $lang . '/' . $file . '.json', $json);
}

/**
 * @param: $content: associative array, alle nieuws items
 * @param: $item: associative array, nieuws item
 * @param: $id: String, id van nieuws item
 * @return: associative array, geupdated nieuws items
 */
function addNewsItemToContent($content, $item, $id)
{
    // Vervang of plaats $item in $content
    $content->{$id} = $item;

    return $content;
}

// function setIdInCookie($id)
// // {
// //     if (isset($_COOKIE['answerd_polls'])) {
// //         $answerd_polls = json_decode($_COOKIE['answerd_polls']);
// //         echo json_encode($answerd_polls);
// //         echo '<br>';
// //     } else {
// //         $answerd_polls = array();
// //     }
// //     array_push($answerd_polls, $id);

// //     echo json_encode($answerd_polls);

//     setcookie('answerd_polls', json_encode($answerd_polls), time() + (365 * 24 * 60 * 60), '/');
//     return;
// }

function printArray($array)
{
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}
