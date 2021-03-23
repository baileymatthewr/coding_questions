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

$functions = ['fib1', 'fib2'];

foreach($functions as $func){
    $start = microtime(true);
    for($i = 0; $i < 40; ++$i)
        echo $func($i)."\n";
    $end = microtime(true);
    $diff = $end - $start;
    echo "$func: Elapsed time: $diff\n";
}

