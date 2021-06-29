My personal solution to sort array of numbers from low value to max value and remove duplicates values. All using php language.

The script loops in each element of the array that needs to be sorted.

At start the element is checked if has brother elements in the same array that are bigger in value than it. If yes that the bigger brother takes his place.

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
     
     
   findSumOfTwoNumbers.php -> is a simple loop script that find 2 numbers in a array/list of numbers, the condition is that the sum of the two to be 9.
   
   this algorims finds 2 numbers that have sum equal to 9 from a array of numbers
    C:\wamp64\www\simple-exercises\findSumOfTwoNumbers.php:5:
    array (size=6)
      0 => int 4
      1 => int 1
      2 => int 6
      3 => int 5
      4 => int 8
      5 => int 9
    C:\wamp64\www\simple-exercises\findSumOfTwoNumbers.php:32:
    array (size=2)
      'first_elem_val' => int 4
      'second_elem_val' => int 5
  this algorims finds 2 recursive numbers that have sum equal to 9 from a array of numbers
    C:\wamp64\www\simple-exercises\findSumOfTwoNumbers.php:39:
    array (size=6)
      0 => int 1
      1 => int 6
      2 => int 4
      3 => int 5
      4 => int 8
      5 => int 9
    C:\wamp64\www\simple-exercises\findSumOfTwoNumbers.php:53:
    array (size=2)
      'first_elem_val' => int 4
      'second_elem_val' => int 5
