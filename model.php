<?php

class Model
{
	protected $attributes = [];
	protected $table;

	public static getTableName()
	{
		return $table;
	}

	public function __set($key, $value)
	{
		$this->attributes[$key] = $value;
	}

	public function __get($key)
	{
		if(array_key_exists($key, $this->attributes)) {
			return $this->attributes[$key];
		} else{
			return null;
		}
	}
}


	$model = new Model();
	$model->maker = 'gibson';
	$model->style = 'les paul';
	$model->pickups = 'humbucker';
	$model->neck = 'set';
	$model->price = 'expensive';

	echo $model->maker . PHP_EOL;
	echo $model->style . PHP_EOL;
	echo $model->pickups . PHP_EOL;
	echo $model->neck . PHP_EOL;
	echo $model->price . PHP_EOL;
