<?php

define('ROOT_PATH', dirname(__DIR__).'/');

/**
 * Get content from data.json
 */
function getJsonContent(){
    $json = file_get_contents(ROOT_PATH.'assets/data/data.json');
    $content = json_decode($json);
     
    return $content;
}

/**
 * Writes to data.json
 */
function writeToJsonFile($content){
    
    $json = json_encode($content);
    file_put_contents(ROOT_PATH.'assets/data/data.json', $json);

}