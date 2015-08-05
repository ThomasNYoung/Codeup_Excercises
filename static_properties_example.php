<?php

class Person
{
    public $firstName;
    public $lastName;

    public static $population = 7241000000;

     public static function getScientificName()
    {
        return 'Homo sapien';
    }

    public static function birth()
    {
        self::$population += 1;
    }
}

// old way
$person = new Person();
// $person->population;
var_dump($person);
 
 // new way with scope resolution operator
$person = Person::$population;
var_dump($person);

// get value of function
echo Person::getScientificName() . PHP_EOL;
echo Person::birth() . PHP_EOL;
echo $population;
