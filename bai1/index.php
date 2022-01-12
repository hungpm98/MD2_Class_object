<?php
include_once "Rectangle.php";
$rectangle = new Rectangle(20,20);
echo $rectangle->height ."<br>";
echo $rectangle->width."<br>";
echo $rectangle->getPerimeter()."<br>";
echo $rectangle->getArea()."<br>";
echo ("Your Rectangle ". $rectangle->display());