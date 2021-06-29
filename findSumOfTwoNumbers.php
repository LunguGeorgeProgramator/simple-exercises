<?php
 $array = [];
echo 'this algorims finds 2 numbers that have sum equal to 9 from a array of numbers';
 $c = [4, 1, 6, 5, 8, 9];
var_dump($c);
$length2 = (count($c) ?? 1) - 1;

 for($i=0; $i <= $length2; $i++){
     for($j=0; $j <= $length2; $j++){
         if ($i === $j) {
             continue;
         }
         $res = $c[$i] + $c[$j];
         if ($res !== 9) {
             continue;
         }
         if ($res === 9) {
            //  $array['result'] = $res; // sum 
            //  $array['first_index_elem'] = $i; // index first element
             $array['first_elem_val'] = $c[$i]; // first element of sum
            //  $array['second_index_elem'] = $j; // index second element
             $array['second_elem_val'] = $c[$j]; // second element of sum
             break;
         }

     }
     if (!empty($array)) {
         break;
     }
 }

 var_dump($array);

 $c2 = [1, 6, 4, 5, 8, 9];
 
 $array2 = [];
 $length = (count($c2) ?? 1) - 1;
 echo 'this algorims finds 2 recursive numbers that have sum equal to 9 from a array of numbers';
 var_dump($c2);
 for($o=0; $o <= $length; $o++){ 
    if ($length-1 < $o+1) {
        break;
    }
    $res = $c2[$o] + $c2[$o+1];
    if ($res !== 9) {
        continue;
    }
    $array2['first_elem_val'] = $c2[$o]; // first element of sum
    $array2['second_elem_val'] = $c2[$o+1]; // second element of sum

 }

 var_dump($array2);
?>