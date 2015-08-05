<?php

class Person
{
	public $firstName;
	public $lastName;

	public function __construct($first, $last)
	{
		$this->firstName = $first;
		$this->lastName = $last;
	}

	public function sayHello()
	{
		return 'hi, ' . $this->firstName . '!';
	}
}

$pinnochio = new Person('pinnochio', 'calvini');
echo $pinnochio->firstName;


