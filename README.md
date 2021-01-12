My personal solution to sort array of numbers from low value to max value and remove duplicates values. All using php language.

The script loops in each elemnt of the array that needs to be sorted.

At start the elemt is checked if has brother elements in the same array that are bigger in value than it. If yes that the bigger brother takes his place.

Next the element if checked in his parent array if it has the same value as other brothers, if there are similar values it is removed form the array.

The final action is to remove the element from the parent array and added in the new sorted array.

This process is repeated untill the un sorted array is empty in a "while" loop.

The random array entered:

    $array_to_sort = [50, 345, 6, 345, 1, 4, 100, 2, 503, 3, 1, 345];
  
Echo's out the results:


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
