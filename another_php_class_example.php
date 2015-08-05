<?php
class Automobile
{
	public $make;
	public $model;
	public $description = "made by  " . $this->make .


	public function setColor($color)
	{
		return $this->color = $color
	}
	public function honk()
	{
		return 'beep beep';
	}

	public function accelerate()
	{
		return $this->increaseFuelAirMixture();
	}
	
	public function increaseFuelAirMixture()
	{

	}
	
	public function brake($message)
	{
		echo "hey buddy, " . $message;
	}
}
// procedural code is where we make instances of an object
$newCar = new Automobile();
$newCar->color = 'salmon';
$newCar->make ='plymouth';
$newCar->model = 'fury';
$niceThingToSay->brake('nice driving.');
$newCar->honk();
$newCar->accelerate();

var_dump($newCar);

$batMobile = new Automobile();
$batMobile->setColor('black');
$batMobile->make = ('wayne enterprises');
echo "the batMobile was made by " . $batMobile->make;

?>