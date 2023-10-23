<?php

function readFi($file){
    $fileContents = file_get_contents($file);
    $serializedData = explode(PHP_EOL, $fileContents);
    $data = [];
    foreach ($serializedData as $entry) {
        $data[] = unserialize($entry);
    }
 return $data;
    
}


?>