<?php

function fib1($x){
    if($x <= 0)
        return 0;
    if($x === 1)
        return 1;
    return fib1($x-1) + fib1($x-2);
}

function fib2($x){
    return fib2helper(0, 1, $x-1);
}

function fib2helper($x, $y, $z){
    if($z < 0)
        return 0;
    if($z == 0)
        return $y;
    return fib2helper($y, $y+$x, $z-1);
}

$start = microtime(true);
for($i = 0; $i < 20; ++$i)
    echo fib1($i)."\n";
$end = microtime(true);
$diff = $end - $start;
echo "Elapsed time: $diff\n";

$start = microtime(true);
for($i = 0; $i < 20; ++$i)
    echo fib2($i)."\n";
$end = microtime(true);
$diff = $end - $start;
echo "Elapsed time: $diff\n";


