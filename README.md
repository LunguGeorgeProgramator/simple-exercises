My personal solution to sort array of numbers from low value to max value and remove duplicates values. All using php language.

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
