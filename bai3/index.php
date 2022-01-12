<?php
include_once 'StopWatch.php';

$myWatch = new StopWatch();

function sortNumber(){
    $arr = [];
    for ($i=0; $i<=100000; $i++) {
        $arr[$i] = rand(100, 10000);
    }
    sort($arr);
}
$myWatch->start();
sortNumber();
$myWatch->stop();
echo $myWatch->getElapsedTime();