<?php
include_once "Fan.php";
$Fan1 = new Fan();
$Fan1->setSpeed(3);
$Fan1 ->setRadius(10);
$Fan1->setColor("yellow");
$Fan1->setOn(false);
$Fan2 = new Fan();
$Fan2->setSpeed(2);
$Fan2 ->setRadius(5);
$Fan2->setColor("blue");
$Fan2->setOn(true);

echo $Fan1->toSting()."<br>";
echo $Fan2->toSting();

