<?php

function countOnBits($var){
    $count = 0;
    if(is_array($var)){
        foreach($var as $bool){
            if($bool)
                ++$count;
        }
        return $count;
    }
}



$bool_array1 = [TRUE, FALSE, FALSE, FALSE];
$bool_array2 = [FALSE, TRUE, FALSE, FALSE];
$bool_array3 = [FALSE, FALSE, TRUE, FALSE];
$bool_array4 = [FALSE, FALSE, FALSE, TRUE];

$bit_array1 = [1, 0, 0, 0];
$bit_array2 = [0, 1, 0, 0];
$bit_array3 = [0, 0, 1, 0];
$bit_array4 = [0, 0, 0, 1];


echo "Each of the following should have exactly 1 bit on\n";

echo "bool_array1: " . countOnBits($bool_array1) . "\n";
echo "bool_array2: " . countOnBits($bool_array2) . "\n";
echo "bool_array3: " . countOnBits($bool_array3) . "\n";
echo "bool_array4: " . countOnBits($bool_array4) . "\n";

echo "bit_array1: " . countOnBits($bit_array1) . "\n";
echo "bit_array2: " . countOnBits($bit_array2) . "\n";
echo "bit_array3: " . countOnBits($bit_array3) . "\n";
echo "bit_array4: " . countOnBits($bit_array4) . "\n";
