<?php
include_once "QuadraticEquation.php";
$bieuthuc = new QuadraticEquation(4, 6, 2);
$delta = $bieuthuc->getDiscriminant();
//echo $delta."<br>";
//echo $bieuthuc->Root1()."<br>";
//echo $bieuthuc->Root2();

if ($delta >= 0) {
    echo $bieuthuc->Root1() . "<br>";
    echo $bieuthuc->Root2();
} else if ($delta == 0) {
    echo $bieuthuc->Root3();
} else {
    echo "The equation has no roots";
}