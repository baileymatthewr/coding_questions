<?php

function fib($x){
    if($x <= 0)
        return 0;
    if($x === 1)
        return 1;
    return fib($x-1) + fib($x-2);
}

for($i = 0; $i < 10; ++$i)
    echo fib($i)."\n";
