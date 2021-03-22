<?php


//------------- First Attempt ------------
function fib1($z){
    if($z <= 0)
        return 0;
    if($z === 1)
        return 1;
    return fib1($z-1) + fib1($z-2);
}

//-------------- Second Attempt --------------
function fib2($z){
    return fib2helper(0, 1, $z-1);
}

function fib2helper($x, $y, $z){
    if($z < 0)
        return 0;
    if($z == 0)
        return $y;
    return fib2helper($y, $y+$x, $z-1);
}

//-------------- Iterative Version -------------
function fib_it($z){
    $x = 0;
    $y = 1;
    if($z <= 0)
        return 0;
    if($z == 1)
        return 1;
    while($z > 0){
        $tmp = $x;
        $x = $y;
        $y += $tmp;
        --$z;
    }
    return $x;
}


$start = microtime(true);
for($i = 0; $i < 30; ++$i)
    echo fib1($i)."\n";
$end = microtime(true);
$diff = $end - $start;
echo "Fib1: Elapsed time: $diff\n";

$start = microtime(true);
for($i = 0; $i < 30; ++$i)
    echo fib2($i)."\n";
$end = microtime(true);
$diff = $end - $start;
echo "Fib2: Elapsed time: $diff\n";

$start = microtime(true);
for($i = 0; $i < 30; ++$i)
    echo fib_it($i)."\n";
$end = microtime(true);
$diff = $end - $start;
echo "Fib_it: Elapsed time: $diff\n";


