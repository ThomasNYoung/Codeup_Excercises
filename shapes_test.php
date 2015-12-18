<?php

require_once 'rectangle.php';
require_once 'square.php';

$rectangle = new Rectangle(75437,8345758);
echo 'the area of the rectangle is ' . $rectangle->area() . PHP_EOL; 

$square = new Square(98);
echo 'the perimeter of the square is ' . $square->perimeter() . PHP_EOL;
echo 'the area of the square is ' . $square->area() . PHP_EOL;