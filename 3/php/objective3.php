<?php

function preIncrement(&$x){
    $x += 1;
    return $x;
}

function postIncrement(&$x){
    $tmp = $x;
    $x += 1;
    return $tmp;
}

function theTime(){
    return round(microtime(true) * 1000);
}

echo "Intuitively, pre-increment seems faster because it's one less step.\n";

$TIMES = 10000000;


echo "Test 1: pre-increment $TIMES times";
$x = 0;
$time = theTime();
for($i = 0; $i < $TIMES; ++$i)
    preIncrement($x);
$time = theTime() - $time;
echo "Elapsed Time: preIncrement() $time\n";


echo "Test 2: ++x $TIMES times";
$x = 0;
$time = theTime();
for($i = 0; $i < $TIMES; ++$i)
    ++$x;
$time = theTime() - $time;
echo "Elapsed Time: ++x $time\n";


echo "Test 3: post-increment $TIMES times";
$x = 0;
$time = theTime();
for($i = 0; $i < $TIMES; ++$i)
    postIncrement($x);
$time = theTime() - $time;
echo "Elapsed Time: postIncrement() $time\n";


echo "Test 4: x++ $TIMES times";
$x = 0;
$time = theTime();
for($i = 0; $i < $TIMES; ++$i)
    $x++;
$time = theTime() - $time;
echo "Elapsed Time: x++ $time\n";








