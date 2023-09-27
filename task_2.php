<?php

//Task 2: Array Manipulation


$numbers = range(1, 10);


function removeEvenNumbers($inputArray) {
    
    $oddNumbers = array();

    foreach ($inputArray as $number) {
        
        if ($number % 2 != 0) {
           
            $oddNumbers[] = $number;
        }
    }

    print_r($oddNumbers);
}

removeEvenNumbers($numbers);
