<?php
$str = "Hello, World";
$len = strlen($str);
echo "$str\n";
for($i = 0; $i < $len/2; ++$i){
    $j = $len - $i - 1;
    $tmp = $str[$i];
    $str[$i] = $str[$j];
    $str[$j] = $tmp;
}
echo "$str\n";
