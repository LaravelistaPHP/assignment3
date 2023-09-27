<?php

//Task 1: String ManipulationTask 1

$text = "The quick brown fox jumps over the lazy dog.";


function modifyText($inputText) {
    
    $lowercaseText = strtolower($inputText);

    $modifiedText = str_replace("brown", "red", $lowercaseText);

    echo $modifiedText;
}

modifyText($text);
