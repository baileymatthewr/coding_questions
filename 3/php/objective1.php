<?php

function postIncrement(&$x){
    $tmp = $x;
    $x += 1;
    return $tmp;
}

echo "Test 1a: Check how x++ works by itself\n";
$x = 1;
echo "x = $x\n";
$x++;
echo "x = $x\n";

echo "Test 1b: Make postIncrement(x) match x++\n";
$x = 1;
echo "x = $x\n";
postIncrement($x);
echo "x = $x\n";

echo "Test 2a: Make postIncrement(x) work in the following statement\n";
echo "y = x++\n";
$x = 1;
$y = $x++;
echo "y = $y\n";
echo "x = $x\n";

echo "y = postIncrement(x)\n";
$x = 1;
$y = postIncrement($x);
echo "y = $y\n";
echo "x = $x\n";
