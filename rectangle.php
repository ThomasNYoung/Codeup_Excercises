<?php

class Rectangle
{
	protected $height;
	private $width;

	public function __construct($height, $width)
	{
		$this->height = $height;
		$this->width = $width;
	}

	public function area()
	{
		$area = $this->height * $this->width;
		return $area;
	}

	public function perimeter()
	{
		return (2 * $this->height) + (2 * $this->width);
	}

	protected function setWidth($width)
	{
		$this->width = trim($width);
	}

	public function getWidth()
	{
		return $this->width;
	}
}