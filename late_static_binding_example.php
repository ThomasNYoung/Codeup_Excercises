<?php
class Father
{
    protected static $name = 'Darth Vader';

    public static function getName() 
    {
        return static::$name;
    }
}

class Son extends Father
{
    protected static $name = 'Luke Skywalker';
}

echo Son::getName() . PHP_EOL;
echo Father::getName() . PHP_EOL;