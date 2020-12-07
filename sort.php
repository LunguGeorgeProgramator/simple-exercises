<?php
/**
 * Sort array of numbers from low value to max value and remove duplicates values 
 */
$array_to_sort = [50, 345, 6, 345, 1, 4, 100, 2, 503, 3, 1, 345];
$array_sorted  = [];

echo 'Before sort ' . var_dump($array_to_sort) . ' </br>';

while( true ){ /// loop the code until the break is encountered 
    // when the array to be sorted is empty all sorted out break
    if(empty($array_to_sort)){ 
        break;
    }
    foreach( $array_to_sort as $key => $value ) { 
        // sort array from low to max value, comment if not needed
        foreach( $array_to_sort as $key_sorted => $value_sorted ) {
            if ($value > $value_sorted) {
                $value = $value_sorted;
                $key = $key_sorted;
            } 
        }
        // remove duplicated values in array, comment if not needed
        foreach ($array_sorted as $key_sorted_check => $value_sorted_check) {
            if ($value == $value_sorted_check) {
                unset($array_sorted[$key_sorted_check]);
            }
        }
        array_push($array_sorted , $value);
        unset($array_to_sort[$key]);
        break;
    }



}


echo 'After sort ' . var_dump($array_sorted) . ' </br>';

    /**
     * C:\wamp64\www\sort\index.php:6:
     * Before sort:
     * array (size=12)
     * 0 => int 50
     * 1 => int 345
     * 2 => int 6
     * 3 => int 345
     * 4 => int 1
     * 5 => int 4
     * 6 => int 100
     * 7 => int 2
     * 8 => int 503
     * 9 => int 3
     * 10 => int 1
     * 11 => int 345
     * 
     * C:\wamp64\www\sort\index.php:35:
     * After sort
     * array (size=9)
     * 1 => int 1
     * 2 => int 2
     * 3 => int 3
     * 4 => int 4
     * 5 => int 6
     * 6 => int 50
     * 7 => int 100
     * 10 => int 345
     * 11 => int 503
     */