<?php

function preIncrement(&$x){
    $x += 1;
    return $x;
}

echo "Test 1a: Check how ++x works by itself\n";
$x = 1;
echo "x = $x\n";
++$x;
echo "x = $x\n";

echo "Test 1b: Make preIncrement(x) match ++x\n";
$x = 1;
echo "x = $x\n";
preIncrement($x);
echo "x = $x\n";

echo "Test 2a: Make preIncrement(x) work in the following statement\n";
echo "y = ++x\n";
$x = 1;
$y = ++$x;
echo "y = $y\n";
echo "x = $x\n";

echo "y = preIncrement(x)\n";
$x = 1;
$y = preIncrement($x);
echo "y = $y\n";
echo "x = $x\n";
